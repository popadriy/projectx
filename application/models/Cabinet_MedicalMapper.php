<?php
/**
 * Created by PhpStorm.
 * User: Igorka
 * Date: 6/1/2017
 * Time: 5:02 PM
 */

class Application_Model_Cabinet_MedicalMapper
{
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
     * @return Application_Model_DbTable_Cabinet_Medical
     */
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Cabinet_Medical');
        }
        return $this->_dbTable;
    }


    /**
     * Save data from model, when id is set, it will try and update
     *
     * @param Application_Model_Analiza instance
     * @return void
     */
    public function save(Application_Model_Cabinet_Medical $cabinet)
    {
        $data = array(
            'id_cabinet' => $cabinet->getIdCabinet(),
            'nume_cabinet' => $cabinet->getNumeCabinet(),
            'logo_cabinet' => $cabinet->getLogoCabinet(),
            'nr_inregistrare' => $cabinet->getNrInregistrare(),
            'cui' => $cabinet->getCui(),
            'cod_iban' => $cabinet->getCodIban(),
            'banca' => $cabinet->getBanca(),
        );

        if (null === ($id = $cabinet->getIdCabinet())) {
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
     * @return Application_Model_Analiza
     */
    public function find($id, Application_Model_Cabinet_Medical $cabinet)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $cabinet->setIdCabinet($row->id_cabinet)
                ->setNumeCabinet($row->nume_cabinet)
                ->setLogoCabinet($row->logo_cabinet)
                ->setNrInregistrare($row->nr_inregistrare)
                ->setCui($row->cui)
                ->setCodIban($row->cod_iban);
    }


    /**
     * Fetch all records from Model used
     *
     * @return array of Application_Model_Analiza
     */
    public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Cabinet_Medical();
            $entry->setIdCabinet($row->id_cabinet)
                  ->setNumeCabinet($row->nume_cabinet)
                  ->setLogoCabinet($row->logo_cabinet)
                  ->setNrInregistrare($row->nr_inregistrare)
                  ->setCui($row->cui)
                  ->setCodIban($row->cod_iban);
            $entries[] = $entry;
        }
        return $entries;
    }
}