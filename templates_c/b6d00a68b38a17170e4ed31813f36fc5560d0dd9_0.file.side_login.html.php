<?php
/* Smarty version 3.1.29, created on 2017-05-26 19:50:17
  from "/Applications/XAMPP/xamppfiles/htdocs/CERPS/templates/side_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59286ad9af73d4_81835425',
  'file_dependency' => 
  array (
    'b6d00a68b38a17170e4ed31813f36fc5560d0dd9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/CERPS/templates/side_login.html',
      1 => 1461110542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59286ad9af73d4_81835425 ($_smarty_tpl) {
?>
<form action="index.php" method="post" role="form" class="form-horizontal">
  <div class="form-group">
    <label class="col-md-4 control-label">帳號：</label>
    <div class="col-md-8">
      <input type="text" name="user_name" value="" class="form-control" placeholder="請輸入帳號">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4"></label>
    <div class="col-md-8">
      <input type="hidden" name="op" value="user_login">
      <button type="submit" name="button" class="btn btn-primary btn-block">登入</button>
    </div>
  </div>
</form><?php }
}
