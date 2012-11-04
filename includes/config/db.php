<?php 

class database 
{
	/**
	 * Holds host, database, username and passwd for db connection.
	 * @var array
	 */
	private $connection;
	
	/**
	 * The db handle.
	 * @var Resource
	 */
	private $db;
	
	private function __construct()
	{
		$this->db = new mysqli(
				$this->connection['host'],
				$this->connection['username'],
				$this->connection['passwd'],
				$this->connection['database']);
	}
	
	public function init(array $connection)
	{
		$this->connection = $connection;
		if (is_null($this->db)) {
			$this->db = new Database();
		}
		return $this->db;
	}
}


