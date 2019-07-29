<?php
/* Smarty version 3.1.33, created on 2019-07-29 18:19:27
  from 'C:\wamp64\www\gnousdoteu-php\tpl\parts\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3f38afc90a27_71245528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5c14e4033e8a24d554511a1899ac2603146cc6f' => 
    array (
      0 => 'C:\\wamp64\\www\\gnousdoteu-php\\tpl\\parts\\nav.tpl',
      1 => 1564424367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3f38afc90a27_71245528 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- NAVBAR -->
<header class="navbar m-2">
  <section class="navbar-section">
    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/" class="btn btn-link text-light"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['nav_item_home'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</a>
    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/services" class="btn btn-link text-light"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['nav_item_services'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</a>
	<a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
/about" class="btn btn-link text-light"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['nav_item_about'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</a>
  </section>
  <section class="navbar-center">
	<img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/img/gnous.svg" alt="GnousLOGO 2019">
  </section>
  <section class="navbar-section">
    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
/donate" class="btn btn-link text-light"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['nav_item_donate'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</a>
    <?php ob_start();
if ($_smarty_tpl->tpl_vars['actual_lang']->value == 'fr') {
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>

    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
/?lang=en" class="btn btn-link text-light"><span class="flag flag-us"> </span> English</a>
    <?php ob_start();
}
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>

    <?php ob_start();
if ($_smarty_tpl->tpl_vars['actual_lang']->value == 'en') {
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>

    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
/?lang=fr" class="btn btn-link text-light"><span class="flag flag-us"> </span> French</a>
    <?php ob_start();
}
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>

  </section>
</header><?php }
}
