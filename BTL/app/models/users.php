<?php 
require_once __DIR__.'/../database/database.php';
	class users extends database{
		
		public function __construct(){
			$this->connect();
		}

		public function login($data){
			$sql = 	'SELECT * FROM rent_house.users where name =:username';
			$stmt = $this->connect->prepare($sql);
			$stmt->bindValue(':username', $data['username']);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			foreach( $result as $password){
				$hashedPassword = $password['pass'];
				if(password_verify($data['password'],$hashedPassword)) return true;
			}
			return false;
		}	

		public function register($data){
			$sql = 'INSERT INTO rent_house.users (name, email, phone, pass) values (:username, :email, :phone, :password)';
			$stmt = $this->connect->prepare($sql);
			$stmt->bindValue(':username',$data['username']);
			$stmt->bindValue(':email',$data['email']);
			$stmt->bindValue(':phone',$data['phone']);
			$stmt->bindValue('password',$data['password']);
			if($stmt->execute()){
				return true;
			}
			else return false;
		}

		public function findUserByEmail($email){
			$sql = 'SELECT * FROM rent_house.users where email = :email';
			$stmt = $this->connect()->prepare($sql);
			$stmt->bindValue(':email',$email);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(count($result)>0) return true;
			return false;
		}

		public function findUserByName($name){
			$sql = 'SELECT * FROM rent_house.users where name = :name';
			$stmt = $this->connect()->prepare($sql);
			$stmt->bindValue(':name',$name);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(count($result)>0) return true;
			return false;
		}
	}
