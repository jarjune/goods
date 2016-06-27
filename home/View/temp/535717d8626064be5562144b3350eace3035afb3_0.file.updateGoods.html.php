<?php
/* Smarty version 3.1.29, created on 2016-06-27 09:46:20
  from "D:\wamp\www\pro\home\View\goods\updateGoods.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5770856ce40436_46714943',
  'file_dependency' => 
  array (
    '535717d8626064be5562144b3350eace3035afb3' => 
    array (
      0 => 'D:\\wamp\\www\\pro\\home\\View\\goods\\updateGoods.html',
      1 => 1466991978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5770856ce40436_46714943 ($_smarty_tpl) {
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
	<form action="" method="post">
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
		<input name='goodsId' type='hidden' value=<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsId'];?>
>
			<tr>
			<td><input name='goodsName' type='text' value=<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsName'];?>
></td>
			<td><input name='goodsPrice' type='text' value=<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsPrice'];?>
></td>
			<td><input name='goodsQuantity' type='text' value=<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsQuantity'];?>
></td>
			<td><textarea name='goodsDescribe'><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsDescribe'];?>
</textarea></td>
			<td><input type='submit' value='确定'></td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_local_item;
}
if ($__foreach_val_0_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_item;
}
?>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
	<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	<?php }?>
</table>
</body>
</html><?php }
}
