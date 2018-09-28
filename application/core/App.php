<?php 
	class App {
		
		public $type;
		public $page;
		public $idx;
		public $pageNum;
		public $member;

		public static $app;
		
		function __construct () {
			if (isset($_GET['param'])) $param = explode("/", $_GET['param']);
			$this->type = isset($param[0]) && strlen($param[0]) ? $param[0] : "main";
			$this->page = isset($param[1]) && strlen($param[1]) ? $param[1] : NULL;
			$this->idx = isset($param[2]) && is_numeric($param[2]) ? $param[2] : NULL;
			$this->pageNum = isset($param[2]) && is_numeric($param[2]) ? $param[2] : "1";
			$this->member = isset($_SESSION['member']) ? $_SESSION['member'] : NULL;
			self::$app = $this;
			// print_r($this->type);
		}

		function getApp() {
			self::$app = new App();
			return self::$app;
		}
	}