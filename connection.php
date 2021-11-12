<?php


	class Database{
		
	//	private $hostname = "wgh9.whogohost.com";
		private $hostname = "nubeero.com";
		private $dbname ="nubeeroc_cubestix";
		private $dbport="3306";
		private $dbsocket="";
		private $dbuser ="nubeeroc_cubestix";
		private $dbpass="Tiger000.";
		
		
		public function getConnection(){
			$this->conn = null;
			
			$mysqlconn = new mysqli($this->hostname,$this->dbuser,$this->dbpass,$this->dbname,$this->dbport);
			
			if ($mysqlconn->connect_errno){
					die("Connection failed: " .$mysqlconn->connect_error);
			}else{
				$this->conn = $mysqlconn;
			}
	
			return $this->conn;
		}
	}

?>