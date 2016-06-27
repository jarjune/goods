<?php

header("content-type:text/html;charset=utf-8");
function __autoload($class_name){
	require_once("Model/".$class_name.".class.php");
}

$d = new PDOConnect("myweb");

if(!empty($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['passwd']) && !empty($_POST['ischeck'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$passwd = md5($_POST['passwd']);
	$ischeck = md5($_POST['ischeck']);
	if($d->table("user")->columns("username,email,passwd,ischeck")->values("'$username','$email','$passwd','$ischeck'")->insert() != "")
		echo "注册成功";
	else
		echo "注册失败";
}
// $username = "asasasa";
// $email = "asaa@qq.com";
// $passwd = md5("asdasds");
// $ischeck = md5("as1d3d5ad1");
// echo $d->table("user")->columns("username,email,passwd,ischeck")->values("'$username','$email','$passwd','$ischeck'")->insert();
$res = $d->table("user")->columns("id,username,email")->stmtMethod("select");
//$d->printResult($res);
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
		<th>id</th>
		<th>用户名</th>
		<th>邮箱</th>
		<th>修改</th>
		<th>删除</th>
	</tr>
	<?php
		foreach ($res as $value) {
			echo "<tr>";
			foreach ($value as $k => $v) {
				echo "<td>";
				echo $v;
				echo "</td>";
			}
			echo '<td><a href="updateList.php?id='.$value['id'].'">修改</a></td>';
			echo '<td><a href="delete.php?id='.$value['id'].'">删除</a></td>';
			echo "</tr>";
		}
	?>
</table>
<form method="post">
<table border="1">
	<tr>
		<th>用户名</th>
		<th>邮箱</th>
		<th>密码</th>
		<th>确认码</th>
		<th>注册</th>
	</tr>
	<tr>
		<td><input type="text" name="username"></td>
		<td><input type="text" name="email"></td>
		<td><input type="password" name="passwd"></td>
		<td><input type="text" name="ischeck"></td>
		<td><input type="submit" name="submit" value="注册"></td>
	</tr>
</table>
</form>
</body>
</html>