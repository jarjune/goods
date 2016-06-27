<?php
/* Smarty version 3.1.29, created on 2016-06-21 12:28:16
  from "D:\wamp\www\pro\home\View\user\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5768c26093f007_75358180',
  'file_dependency' => 
  array (
    '18038927b532be9c6ec6b5a37145bcaf3706f1c9' => 
    array (
      0 => 'D:\\wamp\\www\\pro\\home\\View\\user\\login.html',
      1 => 1466483294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5768c26093f007_75358180 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<form method="post" action="login.html">
	用户名：<input type="text" name="username">
	<br>
	密码：<input type="password" name="password">
	<br>
	<input type="submit" name="submit" value="登录">
</form>
<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {
echo $_smarty_tpl->tpl_vars['message']->value;?>

<?php }?>
</body>
</html><?php }
}
