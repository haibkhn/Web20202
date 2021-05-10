<?php 
	class controller{

		protected $model;

		function model($model){
			require_once __DIR__.'/../models/'.$model.'.php';
			return new $model();
		}

		function view($view, $data =[]){
			if(file_exists(__DIR__.'/../views/'.$view.'.php')){
				require_once __DIR__.'/../views/'.$view.'.php';
			}
			else{
				die("ko co view");
			}
		}	
	}
