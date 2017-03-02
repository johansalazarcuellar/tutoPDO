<?php 

Class DAOConnection{


	private $driver;
	private $host;
	private $database;
	private $user;
	private $password;
	protected $con;


	protected function __construct(){

		self::getConnection();
	}

	private function getConnection(){

		try{


			$this->driver   = "mysql";
			$this->host     = "localhost";
			$this->database = "prueba";
			$this->user 	= "root";
			$this->password = "123";

			$dsn = $this->driver.":host=".
				   $this->host.";dbname=".
				   $this->database.";";


			$this->con = new PDO($dsn,$this->user,$this->password);
			$this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		}catch(PDOException $e){

			die(print_r("Error".$e->getMessage()));
		}

	}

	public function closeConnection(){

		unset($this->con);
	}



}


 ?>