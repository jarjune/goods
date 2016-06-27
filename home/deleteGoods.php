<?php

header("content-type:text/html;charset=utf-8");
require_once("./Model/PDOConnect.class.php");

session_start();
$goodsId = $_GET['goodsId'];
$goods_userId = $_SESSION['userId'];

$d = new PDOConnect("pro");

// if($d->table("user")->where("id = $id")->delete()==1)
// 	header("location:test.php");
// else
// 	echo "false";
if($d->table("goods")->where("goodsId = ? and goods_userId = ?")->stmtMethod("delete",array($goodsId,$goods_userId))==1){
	echo "删除成功";
}else{
	echo "删除失败";
}
echo '<a href="goodsList.php">返回</a>';
?>