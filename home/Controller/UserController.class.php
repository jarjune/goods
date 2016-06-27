<?php
require_once 'lib/Controller'.LAST_NAME;
require_once 'lib/Model'.LAST_NAME;

class UserController extends Controller{
    
    function index(){
	    $this->assign("username",$this->getSession("userName"));
		$this->display("index.html");
	}
	function login(){
	    if(!empty($this->getSession('userName')))
	        $this->location("../index/index.html");
	    else{
    	    $username = $this->post('username');
    	    $password = $this->post('password');
    	    if(!empty($username) && !empty($password)){
        	    $conn = Model::getInstance('pro');
        	     
        	    $res = $conn->table("user")->columns("userId")->where("userName=? and userPassword=?")->stmtMethod("select",array($username,md5($password)));
        	     
        	    if(count($res) == 1){
        	        $this->setSession('userId',$res[0]['userId']);
        	        $this->setSession('userName',$username);

                    $this->location("index.html");
        	    }else{
        	        $this->assign('message','用户名或密码错误');
        	        $this->display('login.html');
        	    }
    	    }else{
    	        $this->assign('message','');
    		    $this->display("login.html");
    	    }
	    }
	}

	
	function logout(){
	    $this->setSession('userName',null);
	    $this->location("login.html");
	}
	
}