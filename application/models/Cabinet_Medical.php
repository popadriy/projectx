<?php
/**
 * Created by PhpStorm.
 * User: Igorka
 * Date: 6/1/2017
 * Time: 4:55 PM
 */

class Application_Model_Cabinet_Medical{
    protected $_id_cabinet;
    protected $_nume_cabinet;
    protected $_logo_cabinet;
    protected $_nr_inregistrare;
    protected $_cui;
    protected $_cod_iban;
    protected $_banca;

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
    public function getIdCabinet()
    {
        return $this->_id_cabinet;
    }

    /**
     * @param mixed $id_cabinet
     */
    public function setIdCabinet($id_cabinet)
    {
        $this->_id_cabinet = $id_cabinet;
    }

    /**
     * @return mixed
     */
    public function getNumeCabinet()
    {
        return $this->_nume_cabinet;
    }

    /**
     * @param mixed $nume_cabinet
     */
    public function setNumeCabinet($nume_cabinet)
    {
        $this->_nume_cabinet = (string) $nume_cabinet;
    }

    /**
     * @return mixed
     */
    public function getLogoCabinet()
    {
        return $this->_logo_cabinet;
    }

    /**
     * @param mixed $logo_cabinet
     */
    public function setLogoCabinet($logo_cabinet)
    {
        $this->_logo_cabinet = $logo_cabinet;
    }

    /**
     * @return mixed
     */
    public function getNrInregistrare()
    {
        return $this->_nr_inregistrare;
    }

    /**
     * @param mixed $nr_inregistrare
     */
    public function setNrInregistrare($nr_inregistrare)
    {
        $this->_nr_inregistrare = (int) $nr_inregistrare;
    }

    /**
     * @return mixed
     */
    public function getCui()
    {
        return $this->_cui;
    }

    /**
     * @param mixed $cui
     */
    public function setCui($cui)
    {
        $this->_cui = (string) $cui;
    }

    /**
     * @return mixed
     */
    public function getCodIban()
    {
        return $this->_cod_iban;
    }

    /**
     * @param mixed $cod_iban
     */
    public function setCodIban($cod_iban)
    {
        $this->_cod_iban = (string) $cod_iban;
    }

    /**
     * @return mixed
     */
    public function getBanca()
    {
        return $this->_banca;
    }

    /**
     * @param mixed $banca
     */
    public function setBanca($banca)
    {
        $this->_banca = (string) $banca;
    }


}