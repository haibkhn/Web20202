<?php 
	require_once __DIR__.'/../database/database.php';
	class saves extends database{

		public function __construct(){
				$this->connect();
			}

		public function findIdhouse($idhouse){
			$sql = 'SELECT * from rent_house.saves where idhouse = :idhouse and iduser = :iduser';
			$stmt = $this->connect->prepare($sql);
			$stmt->bindValue(':idhouse',$idhouse);
			$iduser = $this->getIduser($_SESSION['username']);
			$stmt->bindValue(':iduser', $iduser);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(count($result)<1) return 1;
			return 0;
		}

		public function save($idhouse){
			$check = $this->findIdhouse($idhouse);
			if($check == 1){
				$sql = "INSERT INTO rent_house.saves (iduser, idhouse) values ( :iduser, :idhouse)";
				$stmt = $this->connect->prepare($sql);
				$iduser = $this->getIduser($_SESSION['username']);
				$stmt->bindValue(':iduser', $iduser);
				$stmt->bindValue('idhouse', $idhouse);
				if($stmt->execute()) return 1;
				else return -1;	
			}
			return 0;
		}

		public function getIduser($username){
			$sql = 'SELECT id FROM rent_house.users where name = :username';
			$stmt = $this->connect->prepare($sql);
			$stmt->bindValue(':username',$username);
			$stmt->execute();
			$id = $stmt->fetch();
			return $id['id'];
		}

		public function getSaved(){
			$sql = 'SELECT idhouse from rent_house.saves where iduser = :iduser';
			$stmt = $this->connect->prepare($sql);
			// echo $this->getIduser($_SESSION['username']);
			$iduser = $this->getIduser($_SESSION['username']);
			// echo $iduser;
			$stmt->bindValue(':iduser', $iduser);
			$stmt->execute();
			$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $res;
		}

		public function del($idhouse){
			$sql = 'DELETE  from rent_house.saves where idhouse = :idhouse and iduser = :iduser';
			$stmt = $this->connect->prepare($sql);
			$stmt->bindValue(':idhouse',$idhouse);
			$iduser = $this->getIduser($_SESSION['username']);
			$stmt->bindValue(':iduser', $iduser);
			if($stmt->execute()) return 1;
			return 0;
		}

	}