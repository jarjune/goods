<?php
/* Smarty version 3.1.29, created on 2016-06-27 10:07:52
  from "D:\wamp\www\pro\home\View\user\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57708a78792172_42081354',
  'file_dependency' => 
  array (
    'a37b7434538645c1617c5056813104c9023c05e5' => 
    array (
      0 => 'D:\\wamp\\www\\pro\\home\\View\\user\\index.html',
      1 => 1466993127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57708a78792172_42081354 ($_smarty_tpl) {
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
<a href="logout.html">退出</a>
<br><a href="../goods/goodsList.html">商品列表</a>
<br><a href="../goods/addGoods.html">增加商品</a>
<?php } else { ?>
	<a href="login.html">点击登录</a>
<?php }?>

<form action="../goods/searchGoods.html" method="post">
	搜索商品：<input type="text" name="goodsName"><input type="submit" name="search" value="搜索">
</form>
</body>
</html><?php }
}
