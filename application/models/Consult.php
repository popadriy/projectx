<?php
/**
 * Created by PhpStorm.
 * User: Igorka
 * Date: 6/1/2017
 * Time: 11:01 PM
 */

class Application_Model_Consult{
    protected $_id_consult;
    protected $_motiv_control;
    protected $_observatii;
    protected $_recomandari;
    protected $_tratament;
    protected $_id_pacient;
    protected $_ultima_menstruatie;
    protected $_climax;
    protected $_ciclu_menstrual;
    protected $_nasteri;
    protected $_avorturi;
    protected $_data_consult;

    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdConsult()
    {
        return $this->_id_consult;
    }

    /**
     * @param mixed $id_consult
     */
    public function setIdConsult($id_consult)
    {
        $this->_id_consult = $id_consult;
    }

    /**
     * @return mixed
     */
    public function getMotivControl()
    {
        return $this->_motiv_control;
    }

    /**
     * @param mixed $motiv_control
     */
    public function setMotivControl($motiv_control)
    {
        $this->_motiv_control = $motiv_control;
    }

    /**
     * @return mixed
     */
    public function getObservatii()
    {
        return $this->_observatii;
    }

    /**
     * @param mixed $observatii
     */
    public function setObservatii($observatii)
    {
        $this->_observatii = $observatii;
    }

    /**
     * @return mixed
     */
    public function getRecomandari()
    {
        return $this->_recomandari;
    }

    /**
     * @param mixed $recomandari
     */
    public function setRecomandari($recomandari)
    {
        $this->_recomandari = $recomandari;
    }

    /**
     * @return mixed
     */
    public function getTratament()
    {
        return $this->_tratament;
    }

    /**
     * @param mixed $tratament
     */
    public function setTratament($tratament)
    {
        $this->_tratament = $tratament;
    }

    /**
     * @return mixed
     */
    public function getIdPacient()
    {
        return $this->_id_pacient;
    }

    /**
     * @param mixed $id_pacient
     */
    public function setIdPacient($id_pacient)
    {
        $this->_id_pacient = $id_pacient;
    }

    /**
     * @return mixed
     */
    public function getUltimaMenstruatie()
    {
        return $this->_ultima_menstruatie;
    }

    /**
     * @param mixed $ultima_menstruatie
     */
    public function setUltimaMenstruatie($ultima_menstruatie)
    {
        $this->_ultima_menstruatie = $ultima_menstruatie;
    }

    /**
     * @return mixed
     */
    public function getClimax()
    {
        return $this->_climax;
    }

    /**
     * @param mixed $climax
     */
    public function setClimax($climax)
    {
        $this->_climax = $climax;
    }

    /**
     * @return mixed
     */
    public function getCicluMenstrual()
    {
        return $this->_ciclu_menstrual;
    }

    /**
     * @param mixed $ciclu_menstrual
     */
    public function setCicluMenstrual($ciclu_menstrual)
    {
        $this->_ciclu_menstrual = $ciclu_menstrual;
    }

    /**
     * @return mixed
     */
    public function getNasteri()
    {
        return $this->_nasteri;
    }

    /**
     * @param mixed $nasteri
     */
    public function setNasteri($nasteri)
    {
        $this->_nasteri = $nasteri;
    }

    /**
     * @return mixed
     */
    public function getAvorturi()
    {
        return $this->_avorturi;
    }

    /**
     * @param mixed $avorturi
     */
    public function setAvorturi($avorturi)
    {
        $this->_avorturi = $avorturi;
    }

    /**
     * @return mixed
     */
    public function getDataConsult()
    {
        return $this->_data_consult;
    }

    /**
     * @param mixed $data_consult
     */
    public function setDataConsult($data_consult)
    {
        $this->_data_consult = $data_consult;
    }
}