<?php 
	class Controller {
		public $type;
		public $page;
		public $idx;
		public $pageNum;
		public $member;

		public function start () {
			$param = App::getApp();
			$ctrName =  $param->type."Controller";
			$modelName = $param->type."Model";
			$ctr = new $ctrName();
			$ctr->model = new $modelName();
			$ctr->param = $param;
			$ctr->index();
			// print_r($param);
		}
		protected function index() {
			$method = isset($this->param->page) ? $this->param->page : "basic";
			if (method_exists($this, $method)) $this->$method();
			$this->header();
			$this->content();
			$this->footer();
			// print_r($this->param->page);
		}

		protected function header() {
			include_once(_TEM."header.php");
		}
		protected function content() {
			$path = _TEM."index.php";
			if (isset($this->param->page)) {
				$path = _PG."{$this->param->type}/{$this->param->page}.php";
			}
		}
		protected function footer() {
			include_once(_TEM."footer.php");
		}
	}