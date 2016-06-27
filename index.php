<?php
header("content-type:text/html;charset=utf-8");
define("DIR_NAME",str_replace('\\','/',dirname(__FILE__)));
define("LAST_NAME",'.class.php');
session_start();
global $urlInfo;
$urlInfo = array(
    'manage'=>'home',
    'controller'=>'Index',
    'method'=>'Index'
);
if(!empty($_GET['controller']) && !empty($_GET['method'])){

	$urlInfo['controller'] = $_GET['controller'];
	$urlInfo['method'] = $_GET['method'];

	if(!empty($_GET['manage']))
		$urlInfo['manage'] = $_GET['manage'];
}

require_once $urlInfo['manage'].'/Controller/'.$urlInfo['controller'].'Controller'.LAST_NAME;
$controller = $urlInfo['controller'].'Controller';
$s = new $controller();
$s->$urlInfo['method']();


?>