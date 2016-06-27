<?php
/* Smarty version 3.1.29, created on 2016-06-27 09:25:25
  from "D:\wamp\www\pro\home\View\goods\addGoods.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57708085525ee9_94361801',
  'file_dependency' => 
  array (
    'ffc717528fc453f5559d78aa902d0394330f8dbd' => 
    array (
      0 => 'D:\\wamp\\www\\pro\\home\\View\\goods\\addGoods.html',
      1 => 1466990721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57708085525ee9_94361801 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
</head>
<body>
<form action="addGoods.html" method="post">
	商品名称：<input type="text" name="goodsName"><br>
	商品单价：<input type="text" name="goodsPrice"><br>
	商品总数：<input type="text" name="goodsQuantity"><br>
	商品描述：<textarea type="text" name="goodsDescribe"></textarea><br>
	<input type="submit" name="submit" value="增加商品">
</form>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<a href="goodsList.html">返回</a>
</body>
</html><?php }
}
