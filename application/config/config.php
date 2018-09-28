<?php 
	session_start();

	function alert($msg) {
		echo "<script>alert('{$msg}')</script>";
	}
	function move($url = false) {
		echo "<script>";
			echo $url ? "location.href='{$url}'" : "history.back();";
		echo "</script>";
	}
	function access($bool,$url,$msg = false) {
		if ($bool) {
			alert($msg);
			move($url);
		}
	}
	function __autoload($className) {
		$className2 = strtolower($className);
		switch ($className2) {
			case 'app':
			case 'model':
			case 'controller':
				$path = _CORE."{$className}.php";
				break;
			default:
				$path = strpos($className2,"model") ? _MODEL : _CTR;
				$path .= "{$className}.php"; 
				break;
		}
		// print_r($path);
		require_once($path);
	}