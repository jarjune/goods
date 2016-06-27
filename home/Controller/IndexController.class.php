<?php
require_once 'lib/Controller'.LAST_NAME;

class IndexController extends Controller{

	function index(){
	    $this->assign("username",$this->getSession("userName"));
		$this->display("index.html");
	}
}