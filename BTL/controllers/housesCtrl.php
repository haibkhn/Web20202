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
	}