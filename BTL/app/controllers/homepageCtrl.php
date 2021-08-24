<?php 
/**
 * 
 */
	require_once __DIR__.'/../core/controller.php';
	require_once __DIR__.'/../controllers/housesCtrl.php';
	require_once __DIR__.'/../controllers/savesCtrl.php';

	class homepageCtrl extends controller
	{
		private $housesCtrl;
		private $savesCtrl;

		public function __construct(){
			$this->housesCtrl = new housesCtrl();
			$this->savesCtrl = new savesCtrl();

			//header('Content-Type: application/json');
			// echo $data;
			
		}

		public function getAll(){
			$data = $this->housesCtrl->getAll();
			$this->view('index');
		}

		public function filter(){
			$housesCtrl = new housesCtrl();
			$dataPost =[
				'site' =>' ',
				'costfrom' =>'0',
				'costto' => '100000000',
				'sfrom' =>'0',
				'sto' =>'1000',
				'type'=>''
			];
			if($_SERVER['REQUEST_METHOD'] == 'POST')
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			foreach ($_POST as $key => $value) {
				if($value != "") $dataPost[$key] = trim($value);
			}
			// var_dump($dataPost);
			$data = $housesCtrl->filterHouseCtrl($dataPost);
			// var_dump($data);
			$this->view('filterPage',$data); 
		}

		public function addPage(){
			if(isset($_SESSION['username'])) $this->view('add_page');
			else{
				setcookie("none_user","dang nhap de su dung chuc nang nay", time() + 1);
				$this->getAll();
			}
		}

		public function savePage(){
			// $listId = $this->savesCtrl->getSaved();
			// // print_r($listId);
			// $data = $this->housesCtrl->getFromSave($listId);
			// // print_r($data);
			// $this->view('save',$data);
			$listId = $this->savesCtrl->getSaved();
			if(count($listId) > 0)
			// print_r($listId);
			$data = $this->housesCtrl->getFromSave($listId);
			else $data=[];
			// print_r($data);
			$this->view('save',$data);
		}
		
		public function added(){
			$data = $this->housesCtrl->getAdded();
			$this->view('added', $data);
		}

	}