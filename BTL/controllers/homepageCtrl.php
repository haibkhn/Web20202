<?php 
/**
 * 
 */
	require_once __DIR__.'/../core/controller.php';
	require_once __DIR__.'/../controllers/housesCtrl.php';

	class homepageCtrl extends controller
	{
		private $housesCtrl;

		public function __construct(){
			$this->housesCtrl = new housesCtrl();
			//header('Content-Type: application/json');
			// echo $data;
			
		}

		public function getAll(){
			$data = $this->housesCtrl->getAll();
			$this->view('index',$data);
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
			$data = $housesCtrl->filterHouseCtrl($dataPost);
			$this->view('index',$data); 
		}

	}