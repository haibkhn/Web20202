<?php 
	require_once __DIR__.'/../core/controller.php';

	class housesCtrl extends controller{

		public function __construct(){
			$this->model = $this->model('houses');
		}

		public function incoming_files() {
    		$files = $_FILES;
    		$files2 = [];
    		foreach ($files as $input => $infoArr) {
	        $filesByInput = [];
	        foreach ($infoArr as $key => $valueArr) {
	            if (is_array($valueArr)) { // file input "multiple"
	                foreach($valueArr as $i=>$value) {
	                    $filesByInput[$i][$key] = $value;
	                }
	            }
	            else { // -> string, normal file input
	                $filesByInput[] = $infoArr;
	                break;
	            }
	        }
	        	$files2 = array_merge($files2,$filesByInput);
	    	}
	    	$files3 = [];
	    	foreach($files2 as $file) { // let's filter empty & errors
	        	if (!$file['error']) $files3[] = $file;
	    	}
	    	return $files3;
		}

		function preprocess(){
			$arrayFiles = $this->incoming_files();
  			$dataPost = [
  				'site' => '',
  				'cost' => '',
  				'addr' => '',
  				's' => '',
  				'scribble' => '',
  				'type' => '',
  				'img' => ''
  			];
  			foreach ($_POST as $key => $value) {
  				$dataPost[$key] = $value;
  			}
  			foreach ($arrayFiles as $key => $value) {
  				$target_dir = "../public/img/";
  				$img_name = $this->str_random().$value['name'];
				$target_file = $target_dir . $img_name;
				$dataPost['img'] .= $img_name.';';
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				
				if(isset($_POST["submit"])) {
				  $check = getimagesize($value["tmp_name"]);
				  if($check !== false) {
				    
				    $uploadOk = 1;
				  } else {
				    
				    $uploadOk = 0;
				  }
				}

				
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				  $uploadOk = 0;
				}

				
				if ($uploadOk == 0) {
				  echo "Sorry, your file was not uploaded.";
				
				} else {
				  if (move_uploaded_file($value["tmp_name"], $target_file)) {
				    
				  } else {

				  }
				}  			
			}
			return $dataPost;
		}

		function str_random($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

		public function getFromSave($listId){
			$listHouseSaved = $this->model->getHouseById($listId);
			// print_r($listHouseSaved);
			return $listHouseSaved;
		}

		public function getAdded(){
			$listHousesAdded = $this->model->getHouseByIduser();
			return $listHousesAdded;
		}

		public function del($idhouse){
			$delBool = $this->model->del($idhouse);
  			if($delBool == 1) $suc = "xoa thanh cong";
  			else $suc ="error";
  			setcookie("saveReport",$suc, time()+1);
			header('location:http://localhost:8088/public?url=homepage/added');
		}

		public function change($idhouse){
			$dataPost = $this->preprocess();
  			$changeBool = $this->model->change($dataPost,$idhouse);
  			if($changeBool == 1) $suc = "them thanh cong";
  			else $suc = "ko them dc";
  			// echo $suc[0];
  			header('location:http://localhost:8088/public?url=homepage/added');
		}

		public function getId(){
			$user = $_SESSION['username'];
			$this->model->getIduser($user);
		}

		public function getAll(){
			$data = $this->model->getAll();
			return $data;
		}

		public function filterHouseCtrl($condition){
			$list = $this->model->filterHouseModel($condition);
			return $list;
		}

		public function addHouse(){
			$dataPost = $this->preprocess();
  			$insertBool = $this->model->insertHouse($dataPost);
  			if($insertBool) $suc = "them thanh cong";
  			else $suc = "ko them dc";
  			setcookie("AHreport",$suc, time()+1);
  			// echo $suc[0];
  			$this->view('add_page');
		}
	}