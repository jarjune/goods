<?php
/* Smarty version 3.1.29, created on 2016-06-21 15:57:46
  from "D:\wamp\www\pro\home\View\user\goodsList.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5768f37a171834_71383710',
  'file_dependency' => 
  array (
    'a41e46bf2d484a6af31853c50dfa56594579f99f' => 
    array (
      0 => 'D:\\wamp\\www\\pro\\home\\View\\user\\goodsList.html',
      1 => 1466495864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5768f37a171834_71383710 ($_smarty_tpl) {
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
		<th>修改</th>
		<th>删除</th>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_0_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$__foreach_val_0_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
		<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsPrice'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsQuantity'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsDescribe'];?>
</td>
		<td><a href="updateGoods.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsId'];?>
">修改</a></td>
		<td><a href="deleteGoods.php?goodsId=<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsId'];?>
">删除</a></td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_local_item;
}
if ($__foreach_val_0_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_item;
}
?>
</table>
	<a href="addGoods.html">增加商品</a>
</body>
</html><?php }
}
