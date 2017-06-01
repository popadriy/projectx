<?php
/**
 * Model file
 *
 * PHP version 5
 *
 * @category   tutorial
 * @author     Sauciuc Dragos George <dragos.sauciuc@qinsoft.ro>
 * @since      File available since Release 1.0.1
 */

/**
 * Table Model class
 *
 * @category   tutorial
 * @author     Sauciuc Dragos George <dragos.sauciuc@qinsoft.ro>
 * @since      File available since Release 1.0.1
 */
class Application_Model_Analiza
{
    protected $_id_analiza;
    protected $_tip_analiza;

    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    public function setId_analiza($id)
    {
        $this->_id_analiza = (int) $id;
        return $this;
    }

    public function getId_analiza()
    {
        return $this->_id_analiza;
    }

    public function setAnaliza($tip)
    {
        $this->_tip_analiza = (string) $tip;
        return $this;
    }

    public function getAnaliza()
    {
        return $this->_tip_analiza;
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
}