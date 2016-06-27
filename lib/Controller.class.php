<?php
abstract class Controller{

	public $smarty;

	function __construct(){
		require_once("/smarty/Smarty.class.php");

		$this->smarty = new Smarty(); //建立smarty实例对象$smarty

		$this->smarty->config_dir="/smarty/Config_File.class.php";  // 目录变量

		$this->smarty->caching=false; //是否使用缓存，项目在调试期间，不建议启用缓存

		$this->smarty->template_dir = DIR_NAME.'/'.$GLOBALS['urlInfo']['manage']."/View/".$GLOBALS['urlInfo']['controller']; //设置模板目录

		$this->smarty->compile_dir = DIR_NAME.'/'.$GLOBALS['urlInfo']['manage']."/View/temp"; //设置编译目录

		$this->smarty->cache_dir = DIR_NAME.'/'.$GLOBALS['urlInfo']['manage']."/View/temp"; //缓存文件夹
	}

	function setSession($sessionName,$sessionValue){
		$_SESSION[$sessionName] = $sessionValue;
	}
	function getSession($sessionName){
		if(!empty($_SESSION[$sessionName]))
		  return $_SESSION[$sessionName];
		return '';
	}
	function get($name){
	    if(!empty($_GET[$name]))
	        return $_GET[$name];
	    return '';
	}
	function post($name){
	    if(!empty($_POST[$name]))
	        return $_POST[$name];
	    return '';
	}
	function location($url){
	    header('location:'.$url);
	}
	function assign($tplName,$tplValue){
		$this->smarty->assign($tplName,$tplValue);
	}
	function display($tpl){
	    $arr = explode('/',$tpl); 
	    if(count($arr)==2)
	       $this->smarty->template_dir = DIR_NAME.'/'.$GLOBALS['urlInfo']['manage']."/View/".$arr[0];
	    if(count($arr)==3)
	        $this->smarty->template_dir = DIR_NAME.'/'.$arr[0]."/View/".$arr[1];
		$this->smarty->display($arr[count($arr)-1]);
	}
}