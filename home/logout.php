<?php
	header("content-type:text/html;charset=utf-8");
	session_start();
	$_SESSION['userId'] = null;
	$_SESSION['userName'] = null;
	header("location:index.php");
?>