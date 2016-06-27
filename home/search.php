<?php

	header("content-type:text/html;charset=utf-8");
	require_once("./Model/PDOConnect.class.php");

	if(!empty($_GET['search'])){
		$goodsName = $_GET['goodsName'];
		$conn = new PDOConnect("pro");
		session_start();
		$userId = $_SESSION['userId'];
		$res = $conn->table("goods")->columns("goodsId,goods_userId,goodsName,goodsPrice,goodsQuantity,goodsDescribe")->where("goodsName like ? and goods_userId <> ?")->stmtMethod("select",array('%'.$goodsName.'%',$userId));

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<th>商品名称：</th>
		<th>商品单价：</th>
		<th>商品总数：</th>
		<th>商品描述：</th>
		<th>购买数目：</th>
		<th>购买</th>
		<th>加入购物车</th>
	</tr>
<?php
	foreach ($res as $v) {
		echo '<tr>';
		echo '<td>'.$v['goodsName'].'</td>';
		echo '<td>'.$v['goodsPrice'].'</td>';
		echo '<td>'.$v['goodsQuantity'].'</td>';
		echo '<td>'.$v['goodsDescribe'].'</td>';
		echo '<td>'.'<input name="number" type="text">'.'</td>';
		echo '<td>'.'<a href="buyGoods.php?number=2&goods_userId='.$v['goods_userId'].'&goodsId='.$v['goodsId'].'">购买</a>'.'</td>';
		echo '<td>'.'<a href="addGoodsCar.php?goods_userId='.$v['goods_userId'].'&goodsId='.$v['goodsId'].'">加入购物车</a>'.'</td>';
		echo '</tr>';
	}
?>
</table>
</body>
</html>