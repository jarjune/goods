<?php
/* Smarty version 3.1.29, created on 2016-06-20 23:39:48
  from "D:\wamp\www\pro\home\View\demo.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57680e448f6bc5_65996523',
  'file_dependency' => 
  array (
    '31a6ed30cbba90cc76ec6aa2b4eafacf99f229c3' => 
    array (
      0 => 'D:\\wamp\\www\\pro\\home\\View\\demo.html',
      1 => 1466437165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57680e448f6bc5_65996523 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<META charset="utf-8">
</head>
<body>
<?php echo '<?php

	';?>header("content-type:text/html;charset=utf-8");
	session_start();
	if(!empty($_SESSION['userName'])){
		echo "欢迎".$_SESSION['userName']."登录";
		echo '<a href="logout.php">退出</a>';
<?php echo '?>';?>
<br><a href="goodsList.php">商品列表</a>
<br><a href="addGoods.html">增加商品</a>
<?php echo '<?php
	';?>}else{
		echo '<a href="login.html">点击登录</a>';
	}
<?php echo '?>';?>
<form action="search.php" method="get">
	搜索商品：<input type="text" name="goodsName"><input type="submit" name="search" value="搜索">
</form>
</body>
</html><?php }
}
