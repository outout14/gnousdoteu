<?php
/* Smarty version 3.1.33, created on 2019-07-29 16:30:14
  from 'C:\wamp64\www\gnousdoteu-php\tpl\donate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3f1f165c4c95_06723045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c130e7e01c0e5996b227136309fa3bf1c0d7a4e5' => 
    array (
      0 => 'C:\\wamp64\\www\\gnousdoteu-php\\tpl\\donate.tpl',
      1 => 1564417813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../tpl/parts/header.tpl' => 1,
    'file:./../tpl/parts/nav.tpl' => 1,
    'file:./../tpl/parts/footer.tpl' => 1,
  ),
),false)) {
function content_5d3f1f165c4c95_06723045 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>


<div class="container text-center">
	<h1><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['donate_title'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</h1>
	<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['donate_tipeee'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</p>
	<p class="text-error text-italic">Dons désactivés pour le moment... Contactez l'administrateur</p>
</div>

<div class="container text-center">
	<h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['donate_hardware_title'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</h2>
	<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['donate_hardware_text'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
<br>
	<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['donate_hardware_mail'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</p>
</div>

<div class="container text-center">
	<h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['donate_services_title'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</h2>
	<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['donate_services_text'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
<br>
	<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['donate_services_mail'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</p>
</div>

<?php ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>

<?php }
}
