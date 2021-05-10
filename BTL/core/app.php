<?php 
	class app
	{
		private $controller = "controller";
		private $method = "method";
		private $params = [];

		public function __construct()
		{
			if(!isset($_GET['url'])){
				require_once __DIR__.'/../controllers/homepageCtrl.php';
				$this->controller = new homepageCtrl();
				$this->controller->getAll();
			}
			else{
				$url = $this->getUrl();
				if(file_exists(__DIR__.'/../controllers/'.$url[0].'Ctrl.php')){
					$this->controller = $url[0]."Ctrl";
					require_once(__DIR__.'/../controllers/'.$url[0].'Ctrl.php');
					unset($url[0]);
				}
				$this->controller = new $this->controller;

				if(method_exists($this->controller, $url[1])){
					$this->method = $url[1];
					unset($url[1]);
				}
				$this->params = $url ? array_values($url):[];
				call_user_func_array([$this->controller, $this->method], $this->params);
			}
		}

		public function getUrl()
		{
			$url = $_GET['url'];
			$url = filter_var($url,FILTER_SANITIZE_URL);
			$url = explode('/',$url);
			return $url;
		}
	}
 ?>