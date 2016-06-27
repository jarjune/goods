<?php
/* Smarty version 3.1.29, created on 2016-06-27 10:06:43
  from "D:\wamp\www\pro\home\View\goods\searchGoods.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57708a338a83c6_39693539',
  'file_dependency' => 
  array (
    'f2844011631e10f85601e11bb120205aa65a6c0f' => 
    array (
      0 => 'D:\\wamp\\www\\pro\\home\\View\\goods\\searchGoods.html',
      1 => 1466993200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57708a338a83c6_39693539 ($_smarty_tpl) {
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
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
		<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goodsName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goodsPrice'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goodsQuantity'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goodsDescribe'];?>
</td>
		<td><input name="number" type="text"></td>
		<td><a href="buyGoods.html?number=2&goods_userId='.$v['goods_userId'].'&goodsId='.$v['goodsId'].'">购买</a></td>
		<td><a href="addGoodsCar.html?goods_userId='.$v['goods_userId'].'&goodsId='.$v['goodsId'].'">加入购物车</a></td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
</table>
</body>
</html><?php }
}
