<?php 
	require_once __DIR__.'/../database/database.php';
	class houses extends database{

			public function __construct(){
				$this->connect();
			}

			public function getAll(){
				$sql = 'SELECT * FROM rent_house.houses';
				$stmt = $this->connect->prepare($sql);
				$stmt->execute();
				$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
				// $row = json_encode($row);
				return $row;
			}       
			// public function filter
			public function filterHouseModel($data){
				$sql = 'SELECT * FROM rent_house.houses where site LIKE :site and cost >= :costfrom and cost <= :costto and area >= :sfrom and area <=:sto and type LIKE :type';
				// print_r($data);
				// echo "<br/>";
				$stmt = $this->connect->prepare($sql);
				$site = '%'.$data['site'].'%';
				$stmt->bindValue(':site', $site, PDO::PARAM_STR);
				$stmt->bindValue(':costfrom', $data['costfrom']);
				$stmt->bindValue(':costto', $data['costto']);
				$stmt->bindValue(':sfrom', $data['sfrom']);
				$stmt->bindValue(':sto', $data['sto']);
				$type = '%'.$data['type'].'%';
				$stmt->bindValue(':type', $type,PDO::PARAM_STR);
				
				$stmt->execute();
				$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
				// $row = json_encode($row);
				// var_dump($row);
				return $row;
			}

			public function insertHouse($data){
				$sql = 'INSERT INTO rent_house.houses (site, addr, cost, area, type, description, iduser, img) values (:site, :addr, :cost, :s, :type, :scribble, :iduser, :img)';
				$stmt = $this->connect->prepare($sql);
				$stmt->bindValue(':site',$data['site']);
				$stmt->bindValue(':addr',$data['addr']);
				$stmt->bindValue(':cost',$data['cost']);
				$stmt->bindValue(':s',$data['s']);
				$stmt->bindValue(':type',$data['type']);
				$stmt->bindValue(':scribble',$data['scribble']);
				$id = $this->getIduser($_SESSION['username']);
				$stmt->bindValue(':iduser',$id);
				$stmt->bindValue(':img',$data['img']);
				// $stmt->execute();
				if($stmt->execute() ) return true;
				return false;
			}

			public function change($data, $idhouse){
				$sql = 'UPDATE rent_house.houses set district = :site, addr = :addr, cost = :cost, area = :s, type = :type, description = :scribble, img = :img
						where id = :idhouse';
				$stmt = $this->connect->prepare($sql);
				$stmt->bindValue(':site',$data['site']);
				$stmt->bindValue(':addr',$data['addr']);
				$stmt->bindValue(':cost',$data['cost']);
				$stmt->bindValue(':s',$data['s']);
				$stmt->bindValue(':type',$data['type']);
				$stmt->bindValue(':scribble',$data['scribble']);
				$stmt->bindValue(':img',$data['img']);
				$stmt->bindValue(':idhouse',$idhouse);
				if($stmt->execute()) return true;
				return false;
			}	

			public function getIduser($username){
				$sql = 'SELECT id FROM rent_house.users where name = :username';
				$stmt = $this->connect->prepare($sql);
				$stmt->bindValue(':username',$username);
				
				$stmt->execute();
				$id = $stmt->fetch();
				return $id['id'];
			}

			public function getHouseById($listId){
				$count = count($listId);
				$con = "(";
				for(  $i = 0; $i < $count-1; $i++){
					$con .= " :id".$i.",";
				}
				$count--;
				$con .= " :id".$count." )";
				$sql = "SELECT * FROM rent_house.houses where id IN ".$con;
				$stmt = $this->connect->prepare($sql);
				$i = 0;
				foreach ($listId as $key => $value) {
					$stmt->bindValue(":id".$i, $value['idhouse']);
					$i++;
				}
				$stmt->execute();
				$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $res;
			}

			public function getHouseByIduser(){
				$sql = 'SELECT * from rent_house.houses where iduser = :iduser';
				$stmt = $this->connect->prepare($sql);
				$id = $this->getIduser($_SESSION['username']);
				$stmt->bindValue(':iduser',$id);
				$stmt->execute();
				$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $res;
			}

			public function del($idhouse){
				$sql = 'DELETE  from rent_house.houses where id = :idhouse and iduser = :iduser';
				$stmt = $this->connect->prepare($sql);
				$stmt->bindValue(':idhouse',$idhouse);
				$iduser = $this->getIduser($_SESSION['username']);
				$stmt->bindValue(':iduser', $iduser);
				if($stmt->execute()) return 1;
				return 0;
			}

			public function getHouseById2($id){
				$sql = 'select * from rent_house.houses where id = :id';
				$stmt = $this->connect()->prepare($sql);
				$stmt->bindValue(':id', $id);
				$stmt->execute();
				$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $res;
			}

}	