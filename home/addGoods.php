<?php

	header("content-type:text/html;charset=utf-8");
	require_once("./Model/Model.class.php");

	if(!empty($_POST['submit'])){
		$goodsName = $_POST['goodsName'];
		$goodsPrice = $_POST['goodsPrice'];
		$goodsQuantity = $_POST['goodsQuantity'];
		$goodsDescribe = $_POST['goodsDescribe'];

		session_start();
		$userId = $_SESSION['userId'];
		$conn = new Model("pro");

		$res = $conn->table("goods")->columns("goods_userId,goodsName,goodsPrice,goodsQuantity,goodsDescribe")->values("?,?,?,?,?")->stmtMethod("insert",array($userId,$goodsName,$goodsPrice,$goodsQuantity,$goodsDescribe));
		if($res == 1){
			echo "增加成功";
		}else{
			echo "增加失败";
		}
	}
	echo '<a href="goodsList.php">返回</a>';


?>