<?php 
	class database {

		private $host = "db";
		private $user = "root";
		private $pw   = "root" ;
		// private $pw   = "" ;
		private $dtbn = "rent_house";

		protected $connect;

		protected function connect(){
			$dsn = 'mysql:host='.$this->host.';port=3306;dbname='.$this->dtbn;
			try{
				$pdo = new PDO($dsn, $this->user, $this->pw);
				$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				return $this->connect = $pdo;
			} catch(PDOException $e){
				echo $e->getMessage();
			}	

		}
	}