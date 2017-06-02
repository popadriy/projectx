<?php
/**
 * Created by PhpStorm.
 * User: Igorka
 * Date: 6/1/2017
 * Time: 11:20 PM
 */

class Application_Model_ConsultMapper{
    /**
     * Zend db table object
     *
     * @var Zend_Db_Table_Abstract
     */

    protected $_dbTable;


    /**
     * Set db table object
     *
     * @param string $dbTable
     * @return this mapper class instance
     */
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }


    /**
     * Return instance of Zend_Db_Table_Abstract set for this mapper
     *
     * @return Application_Model_DbTable_Consult
     */
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Consult');
        }
        return $this->_dbTable;
    }


    /**
     * Save data from model, when id is set, it will try and update
     *
     * @param Application_Model_Consult instance
     * @return void
     */
    public function save(Application_Model_Consult $consult)
    {
        $data = array(
            'motiv_control' => $consult->getMotivControl(),
            'observatii' => $consult->getObservatii(),
            'recomandari' => $consult->getRecomandari(),
            'tratament' => $consult->getTratament(),
            'ultima_menstruatie'  => $consult->getUltimaMenstruatie(),
            'climax' => $consult->getClimax(),
            'ciclu_menstrual' => $consult->getCicluMenstrual(),
            'nasteri' => $consult->getNasteri(),
            'avorturi' => $consult->getAvorturi(),
            'data_consult' => date('Y-m-d H:i:s'),
        );

        if (null === ($id = $consult->getIdConsult())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }


    /**
     * Find a record of Model, when found model is set
     *
     * @param $id
     * @return Application_Model_Consult
     */
    public function find($id, Application_Model_Consult $consult)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $consult->setIdConsult($row->id_consult)
                ->setMotivControl($row->motiv_control)
                ->setObservatii($row->observatii)
                ->setRecomandari($row->recomandari)
                ->setTratament($row->tratament)
                ->setUltimaMenstruatie($row->ultima_menstruatie)
                ->setClimax($row->climax)
                ->setCicluMenstrual($row->ciclu_menstrual)
                ->setNasteri($row->nasteri)
                ->setAvorturi($row->avorturi)
                ->setDataConsult($row->data_consult);
    }


    /**
     * Fetch all records from Model used
     *
     * @return array of Application_Model_Consult
     */
    public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Consult();
            $entry->setIdConsult($row->id_consult)
                  ->setMotivControl($row->motiv_control)
                  ->setObservatii($row->observatii)
                  ->setRecomandari($row->recomandari)
                  ->setTratament($row->tratament)
                  ->setUltimaMenstruatie($row->ultima_menstruatie)
                  ->setClimax($row->climax)
                  ->setCicluMenstrual($row->ciclu_menstrual)
                  ->setNasteri($row->nasteri)
                  ->setAvorturi($row->avorturi)
                  ->setDataConsult($row->data_consult);
            $entries[] = $entry;
        }
        return $entries;
    }
}