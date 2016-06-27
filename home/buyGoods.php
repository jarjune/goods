<?php

	header("content-type:text/html;charset=utf-8");
	require_once("./Model/PDOConnect.class.php");

	$goods_userId = $_GET['goods_userId'];
	$goodsId = $_GET['goodsId'];
	$number = $_GET['number'];
	$date = date("Y-m-d H:i:s",time());
	$conn = new PDOConnect("pro");

	session_start();
	if(!empty($_SESSION['userId'])){
		$userId = $_SESSION['userId'];
		if($userId != $goods_userId){
			$res = $conn->table("`order`")->columns("order_userId,order_goodsId,orderGoodsQuantity,orderCreateTime,orderState,orderCost")->values("?,?,?,?,?,?")->stmtMethod("insert",array($goods_userId,$goodsId,$number,$date,1,16.0));
			if($res == 1){
				echo "下单成功，请在12小时之内付款";
			}else{
				echo "下单失败";
			}
		}else{
			echo "不能买自己的商品";
		}
	}else{
		echo "<a href='login.html'>请登录</a>";
	}
?>