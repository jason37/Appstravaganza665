<?php


/**
 * Description of Store
 *
 * @author chapin
 */
class Store 
{
	static public $instance;
	private $name;
	
	private function __construct($name) {
		$this->name = $name;
	}
	
	/**
	 * Generic getter.
	 * @param string $name
	 * @return mixed
	 */
	public function __get($name)
	{
		return $this->$name;
	}
	
	/**
	 * Generic accessor.
	 * string type $name
	 * mixed type $value 
	 */
	public function __set($name, $value)
	{
		$this->$name = $value;
	}
	
	
	/**
	 * Return a singleton Store object.
	 * @return Store
	 */
	static public function init($name)
	{
		if (!is_object(self::$instance)) {			
			self::$instance = new Store($name);
		}
		return self::$instance;
	}
}
