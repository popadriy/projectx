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
class Application_Model_Scrisoare_medicala
{
	protected $_id_vizite;
	protected $_scrisoare_medicala;
	protected $_id_user;
	protected $_id_consult;
	
	public function __construct(array $options = null)
	{
		if (is_array($options)) {
			$this->setOptions($options);
		}
	}
	
	public function __set($name, $value)
	{
		$method = 'set' . $name;
		if (('mapper' == $name) || !method_exists($this, $method)) {
			throw new Exception('Invalid upload property');
		}
		$this->$method($value);
	}
	
	public function __get($name)
	{
		$method = 'get' . $name;
		if (('mapper' == $name) || !method_exists($this, $method)) {
			throw new Exception('Invalid upload property');
		}
		return $this->$method();
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
		
	
	
	public function setId_vizite($id_vizite)
	{
		$this->_id_vizite= (int) $id_vizite;
		return $this;
	}
	
	public function getId_vizite()
	{
		return $this->_id_vizite;
	}
	
	
	
	public function setScrisoare_medicala($scrisoare_medicala)
	{
		$this->_scrisoare_medicala= (string) $scrisoare_medicala;
		return $this;
	}
	
	public function setScrisoare_medicala()
	{
		return $this->_scrisoare_medicala;
	}
	
	
	public function setId_user($id_user)
	{
		$this->_id_user= (int) $id_user;
		return $this;
	}
	
	public function getId_user()
	{
		return $this->_id_user;
	}
	
	
	public function setId_consult($id_consult)
	{
		$this->_id_consult= (int) $id_consult ;
		return $this;
	}
	
	public function getId_consult()
	{
		return $this->_id_consult ;
	}
}