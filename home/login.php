<?php

	header("content-type:text/html;charset=utf-8");
	require_once("./Model/Model.class.php");
	if(!empty($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$conn = new Model("pro");

		$res = $conn->table("user")->columns("userId")->where("userName=? and userPassword=?")->stmtMethod("select",array($username,md5($password)));

		if(count($res) == 1){
			echo "登录成功";
			session_start();
			$_SESSION['userId'] = $res[0]['userId'];
			$_SESSION['userName'] = $username;
			header("location:index.php");

		}else{
			echo "用户名或密码错误";
		}
	}
?>