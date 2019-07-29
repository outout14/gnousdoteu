<?php
/* Smarty version 3.1.33, created on 2019-07-29 17:59:09
  from 'C:\wamp64\www\gnousdoteu-php\tpl\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3f33ed198be3_35941081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e3dfe762312eca052fabe540b90c8fd62a10f9a' => 
    array (
      0 => 'C:\\wamp64\\www\\gnousdoteu-php\\tpl\\404.tpl',
      1 => 1564423132,
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
function content_5d3f33ed198be3_35941081 (Smarty_Internal_Template $_smarty_tpl) {
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
echo $_smarty_tpl->tpl_vars['lang']->value['404_title'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</h1>
	<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['404_text_1'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</p>
	<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['404_text_2'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</p>
	<a href="/" class="btn btn-success"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['404_btn'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</a>
</div>
</div>

<?php ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>



<?php }
}
