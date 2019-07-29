<?php
/* Smarty version 3.1.33, created on 2019-07-29 18:15:37
  from 'C:\wamp64\www\gnousdoteu-php\tpl\parts\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3f37c9e0ad52_03341760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cbe6e528427f9bf9fc4d5d9a01b662b55843e60' => 
    array (
      0 => 'C:\\wamp64\\www\\gnousdoteu-php\\tpl\\parts\\header.tpl',
      1 => 1564424121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./meta.tpl' => 1,
  ),
),false)) {
function content_5d3f37c9e0ad52_03341760 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
	<title>Gnous.eu - <?php ob_start();
echo $_smarty_tpl->tpl_vars['pagetitle']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</title>
    <?php ob_start();
$_smarty_tpl->_subTemplateRender('file:./meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

	<link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/dist/spectre.min.css">
	<link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/dist/spectre-exp.min.css">
	<link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
/dist/gnous2019.css">
	<link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
/dist/flags.css">
	<link rel="icon" type="image/png" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/img/logo.png" />
</head>
<body class="bg-dark"><?php }
}
