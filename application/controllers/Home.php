<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct() {
		parent::__construct();
	}
	
	public function index(){
		$view = null;
		$this->render('normal_page', 'Home','Home/index', $view, '');
		// page_type, address of view file, data, js of this page
	}

	public function test(){
		echo strtolower(explode('/', $_SERVER['SERVER_PROTOCOL'])[0]).'://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/'.explode('/', $_SERVER['SCRIPT_NAME'])[1];
		echo "<br>";
		echo strtolower(explode('/', $_SERVER['SERVER_PROTOCOL'])[0]);
	}
}
