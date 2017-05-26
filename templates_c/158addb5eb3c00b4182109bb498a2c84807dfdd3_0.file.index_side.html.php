<?php
/* Smarty version 3.1.29, created on 2017-05-26 19:50:17
  from "/Applications/XAMPP/xamppfiles/htdocs/CERPS/templates/index_side.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59286ad9af4192_56246365',
  'file_dependency' => 
  array (
    '158addb5eb3c00b4182109bb498a2c84807dfdd3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/CERPS/templates/index_side.html',
      1 => 1461110710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:side_tools.html' => 1,
    'file:side_login.html' => 1,
  ),
),false)) {
function content_59286ad9af4192_56246365 ($_smarty_tpl) {
?>
<div class="panel panel-primary">
  <div class="panel-heading">功能表</div>
  <div class="panel-body">
    <?php if (isset($_smarty_tpl->tpl_vars['user_name']->value)) {?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_tools.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } else { ?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
   </div>
</div><?php }
}
