<?php 
	class Controller {
		public $type;
		public $page;
		public $idx;
		public $pageNum;
		public $member;?

		public function start () {
			$param = App::getApp();
			print_r($param);
		}
	}