<?php
/* Smarty version 3.1.29, created on 2016-06-21 10:27:26
  from "D:\wamp\www\pro\home\View\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5768a60e11b336_19867986',
  'file_dependency' => 
  array (
    '07b95892bd526d83d8e5b46faaf5b073e24a1edf' => 
    array (
      0 => 'D:\\wamp\\www\\pro\\home\\View\\index.html',
      1 => 1466476044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5768a60e11b336_19867986 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<META charset="utf-8">
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['username']->value != '') {?>
欢迎<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
登录
<a href="logout.php">退出</a>
<br><a href="goodsList.php">商品列表</a>
<br><a href="addGoods.html">增加商品</a>
<?php } else { ?>
	<a href="../user/login.html">点击登录</a>
<?php }?>

<form action="search.php" method="get">
	搜索商品：<input type="text" name="goodsName"><input type="submit" name="search" value="搜索">
</form>
</body>
</html><?php }
}
