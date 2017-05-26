<?php
/* Smarty version 3.1.29, created on 2017-05-26 19:50:17
  from "/Applications/XAMPP/xamppfiles/htdocs/CERPS/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59286ad9ae8740_28374717',
  'file_dependency' => 
  array (
    '23c044397ba9f900588ccb38d108ae1ab82e0ba2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/CERPS/templates/index.html',
      1 => 1461110334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index_side.html' => 1,
  ),
),false)) {
function content_59286ad9ae8740_28374717 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="bootstrap/js/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="bootstrap/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery-migrate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container">
      <div id="shop_head">
        <a href="index.php">
          <img src="images/title.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" class="img-responsive">
        </a>
      </div>

      <div id="shop_main" class="row">
        <div class="col-md-9 col-sm-8">主內容區</div>
        <div class="col-md-3 col-sm-4">
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index_side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>

      <div id="shop_foot" >
        <div>地址：XX市XX區XX路XX巷XX號</div>
        <div>電話：(06)2345678</div>
        <div>版權所有 copyright © 2016 tad0616.net. All Rights Reserved. </div>
      </div>
    </div>
  </body>
</html><?php }
}
