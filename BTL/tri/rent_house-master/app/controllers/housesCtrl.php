<?php 
	require_once __DIR__.'/../core/controller.php';

	class housesCtrl extends controller{

		public function __construct(){
			$this->model = $this->model('houses');
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
			// return 1;
		// 	// $this->model->insertHouse();
		// 	// if (isset($_POST['submit'])){
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

				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
				  $check = getimagesize($value["tmp_name"]);
				  if($check !== false) {
				    // echo "File is an image - " . $check["mime"] . ".";
				    $uploadOk = 1;
				  } else {
				    // echo "File is not an image.";
				    $uploadOk = 0;
				  }
				}

				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				  $uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				  echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($value["tmp_name"], $target_file)) {

				    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
				  } else {
				    // echo "Sorry, there was an error uploading your file.";
				  }
				}  			
			}
  			// echo "<pre>";
  			// print_r($dataPost);
  			// echo "</pre>";
  			// echo $_SESSION['username'];
  			$insertBool = $this->model->insertHouse($dataPost);
  			if($insertBool) $suc = "them thanh cong";
  			else $suc = "ko them dc";
  			$this->view('add_page', $suc);
  			// echo "<pre>";
  			// print_r($tmpFiles);
  			// echo "</pre>";
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

		function str_random($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

		// public function getId(){
		// 	$user = $_SESSION['username'];
		// 	$this->model->getIduser($user);
		// }
	}