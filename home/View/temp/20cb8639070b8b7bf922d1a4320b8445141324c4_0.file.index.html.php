<?php
/* Smarty version 3.1.29, created on 2016-06-27 10:04:47
  from "D:\wamp\www\pro\home\View\index\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577089bf88f7a0_88090392',
  'file_dependency' => 
  array (
    '20cb8639070b8b7bf922d1a4320b8445141324c4' => 
    array (
      0 => 'D:\\wamp\\www\\pro\\home\\View\\index\\index.html',
      1 => 1466993023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577089bf88f7a0_88090392 ($_smarty_tpl) {
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
<a href="../user/logout.html">退出</a>
<?php } else { ?>
	<SCRIPT type="text/javascript">
		window.location.href="../user/login.html";
	</SCRIPT>
<?php }?>

<form action="../goods/searchGoods.html" method="post">
	搜索商品：<input type="text" name="goodsName"><input type="submit" name="search" value="搜索">
</form>
</body>
</html><?php }
}
