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
				$row = json_encode($row);
				return $row;
			}       
			// public function filter
			public function filterHouseModel($data){
				$sql = 'SELECT * FROM rent_house.houses where addr LIKE :site and cost >= :costfrom and cost <= :costto and s >= :sfrom and s <=:sto and type LIKE :type';
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
				$row = json_encode($row);
				// var_dump($row);
				return $row;
			}
		}