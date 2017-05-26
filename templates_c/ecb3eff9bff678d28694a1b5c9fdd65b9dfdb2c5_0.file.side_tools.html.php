<?php
/* Smarty version 3.1.29, created on 2017-05-26 19:50:56
  from "/Applications/XAMPP/xamppfiles/htdocs/CERPS/templates/side_tools.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59286b00f17df3_45574736',
  'file_dependency' => 
  array (
    'ecb3eff9bff678d28694a1b5c9fdd65b9dfdb2c5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/CERPS/templates/side_tools.html',
      1 => 1461110624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59286b00f17df3_45574736 ($_smarty_tpl) {
?>
<div class="alert alert-success">
  <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
您好！歡迎光臨<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>

</div>
<a href="index.php" class="btn btn-block btn-primary">回首頁</a>
<a href="tool.php?op=goods_form" class="btn btn-block btn-success">發布商品</a>
<a href="index.php?op=user_logout" class="btn btn-block btn-danger">登出</a><?php }
}
