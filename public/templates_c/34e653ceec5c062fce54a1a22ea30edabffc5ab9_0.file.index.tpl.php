<?php
/* Smarty version 3.1.33, created on 2019-07-29 16:25:49
  from 'C:\wamp64\www\gnousdoteu-php\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3f1e0d1304b8_76826786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34e653ceec5c062fce54a1a22ea30edabffc5ab9' => 
    array (
      0 => 'C:\\wamp64\\www\\gnousdoteu-php\\tpl\\index.tpl',
      1 => 1564417548,
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
function content_5d3f1e0d1304b8_76826786 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>



<div class="hero hero-lg gradient">
                  <div class="hero-body">
                    <h1><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['home_title'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</h1>
                    <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['home_description'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</p>
					<a href="/services" class="btn btn-success text-light"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['home_btn_1'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</a></p>
                  </div>
                </div>

<?php ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

<?php }
}
