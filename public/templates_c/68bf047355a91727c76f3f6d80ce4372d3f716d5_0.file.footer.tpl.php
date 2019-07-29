<?php
/* Smarty version 3.1.33, created on 2019-07-29 18:12:15
  from 'C:\wamp64\www\gnousdoteu-php\tpl\parts\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3f36ffd3a290_57590084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68bf047355a91727c76f3f6d80ce4372d3f716d5' => 
    array (
      0 => 'C:\\wamp64\\www\\gnousdoteu-php\\tpl\\parts\\footer.tpl',
      1 => 1564423935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3f36ffd3a290_57590084 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/dist/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ORIGINAL_URL']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
/dist/gnous.js"><?php echo '</script'; ?>
> 

</body>
</html><?php }
}
