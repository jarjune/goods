<?php

header("content-type:text/html;charset=utf-8");
require_once("./Model/PDOConnect.class.php");


session_start();
$goods_userId = $_SESSION['userId'];

if(!empty($_POST['goodsId']) && !empty($_POST['goodsName']) && !empty($_POST['goodsPrice']) && !empty($_POST['goodsQuantity']) && !empty($_POST['goodsDescribe'])){
	$goodsId = $_POST['goodsId'];
	$goodsName = $_POST['goodsName'];
	$goodsPrice = $_POST['goodsPrice'];
	$goodsQuantity = $_POST['goodsQuantity'];
	$goodsDescribe = $_POST['goodsDescribe'];

	$d = new PDOConnect("pro");
	if($d->table("goods")->set("goodsName = ?,goodsPrice = ?,goodsQuantity = ?,goodsDescribe = ?")->where("goodsId = ? and goods_userId = ?")->stmtMethod("update",array($goodsName,$goodsPrice,$goodsQuantity,$goodsDescribe,$goodsId,$goods_userId)) == 1)
		echo "更新成功";
	else
		echo "更新失败";
}else{
	echo "更新失败";
}
echo '<a href="goodsList.php">返回</a>';
// echo $d->table("user")->set("username = ?,email = ?")->where("id = ?")->stmtMethod("update",array($username,$email,$id));

// if($d->table("user")->set("username = '{$username}',email = '{$email}'")->where("id = $id")->update()==1)
// 	header("location:test.php");
// else
// 	echo "false";
?>