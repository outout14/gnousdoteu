<?php
/* Smarty version 3.1.33, created on 2019-07-29 16:28:17
  from 'C:\wamp64\www\gnousdoteu-php\tpl\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3f1ea16e8e51_52100236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40ec7ba25d40bb827e5d3953a6bc2dcd5e8dba14' => 
    array (
      0 => 'C:\\wamp64\\www\\gnousdoteu-php\\tpl\\about.tpl',
      1 => 1564417696,
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
function content_5d3f1ea16e8e51_52100236 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>


<div class="container">
	<h1><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['about_title'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</h1>
  <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['about_description_1'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</p>
	<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['about_description_2'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</p>
	<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['about_description_3'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</p>
  
	<pre class="mx-2 container text-success">
root@dedie1:~# neofetch
       _,met$$$$$gg.          root@dedie1
    ,g$$$$$$$$$$$$$$$P.       -----------
  ,g$$P"     """Y$$.".        OS: Debian GNU/Linux 9.7 (stretch) x86_64
 ,$$P'              `$$$.     Model: PowerEdge R410
',$$P       ,ggs.     `$$b:   Kernel: 4.15.17-1-pve
`d$$'     ,$P"'   .    $$$    Uptime: 17 days, 20 minutes
 $$P      d$'     ,    $$P    Packages: 858
 $$:      $$.   -    ,d$$'    Shell: bash 4.4.12
 $$;      Y$b._   _,d$P'      CPU: Intel Xeon L5630 (16) @ 1.5GHz
 Y$$.    `.`"Y$$$$P"'         GPU: Matrox Electronics Systems Ltd. MGA G200eW W
 `$$b      "-.__              Memory: 19547MB / 32154MB
  `Y$$                        ​
   `Y$$.                      <span class="text-error">████</span><span class="text-success">████</span><span class="text-warning">████</span><span class="text-primary">████</span><span style="color: purple">████</span><span style="color: blue">████</span><span class="text-gray">████</span>
     `$$b.                    ​
       `Y$$b.
          `"Y$b._
              `"""
			  
	</pre>

<?php ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>


<?php }
}
