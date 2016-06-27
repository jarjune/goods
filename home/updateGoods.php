<?php

header("content-type:text/html;charset=utf-8");
require_once("./Model/PDOConnect.class.php");

session_start();
$goodsId = $_GET['goodsId'];
$goods_userId = $_SESSION['userId'];

$d = new PDOConnect("pro");
//$d->table("user")->set("email = '12345@qq.com'")->where("id = $id")->update();
$res = $d->table("goods")->columns("goodsId,goodsName,goodsPrice,goodsQuantity,goodsDescribe")->where("goodsId = ? and goods_userId = ?")->stmtMethod("select",array($goodsId,$goods_userId));
//$d->printResult($res);
// header("location:test.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<table border="1">
	<tr>
		<th>商品名称：</th>
		<th>商品单价：</th>
		<th>商品总数：</th>
		<th>商品描述：</th>
		<th>确定</th>
	</tr>
	<form action="update.php" method="post">
	<?php
		echo "<input name='goodsId' type='hidden' value={$res[0]['goodsId']}>";
		foreach ($res as $v) {
			echo "<tr>";
			echo "<td><input name='goodsName' type='text' value={$v['goodsName']}></td>";
			echo "<td><input name='goodsPrice' type='text' value={$v['goodsPrice']}></td>";
			echo "<td><input name='goodsQuantity' type='text' value={$v['goodsQuantity']}></td>";
			echo "<td><textarea name='goodsDescribe'>{$v['goodsDescribe']}</textarea></td>";
			echo "<td><input type='submit' value='确定'></td>";
			echo "</tr>";
		}
	?>
	</form>
</table>
</body>
</html>