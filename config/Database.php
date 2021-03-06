<?php

class Database {

	// MySQL DB connection details
	private $host = 'localhost';
	private $user = 'root';
	private $password = 'root';
	private $database = 'webshop_db';

	// production
	/*private $host = 'sql100.epizy.com';
	private $user = 'epiz_27771583';
	private $password = 'WoXoicYopjv';
	private $database = 'epiz_27771583_freshshop';*/

	private $conn;

	public function getConnection() {
		$this->conn = null;
		$options = array (
		    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_EMULATE_PREPARES => false
		);

		// Connect to MySQL and instantiate our PDO object
		try {
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->database;charset=utf8", $this->user, $this->password, $options);
			// echo "Connected successfully using classes!";
		} catch (PDOException $e) {
			die("Connection failed: " . $e->getMessage());
		}

		return $this->conn;
	}
}

?>