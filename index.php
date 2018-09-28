<?php 
	const _ROOT = __DIR__."/";
	const _APP = _ROOT."application/";
	const _PUBLIC = _ROOT."public/";

	const _CONFIG = _APP."config/";
	const _CTR = _APP."controller/";
	const _CORE = _APP."core/";
	const _MODEL = _APP."model/";
	const _VIEW = _APP."view/";

	const _PG = _VIEW."pages/";
	const _TEM = _VIEW."template/";

	define("_URL", "http://{$_SERVER['HTTP_HOST']}/");
	const _CSS = _URL."css/";
	const _JS = _URL."js/";
	const _IMG = _URL."img/";

	require_once(_CONFIG."config.php");

	App::getApp();
	Controller::start();
