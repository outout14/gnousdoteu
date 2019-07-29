<?php
/* Smarty version 3.1.33, created on 2019-07-29 16:37:16
  from 'C:\wamp64\www\gnousdoteu-php\tpl\services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3f20bc6f2f63_27522637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64173f55a5a5bea58bb35e0b021afb55389e83c6' => 
    array (
      0 => 'C:\\wamp64\\www\\gnousdoteu-php\\tpl\\services.tpl',
      1 => 1564418235,
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
function content_5d3f20bc6f2f63_27522637 (Smarty_Internal_Template $_smarty_tpl) {
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
echo $_smarty_tpl->tpl_vars['lang']->value['services_title'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</h1>
	<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_description_1'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
<br>
	<?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_description_2'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</p>
</div>


<div class="container services bg-primary">

<h2 class="text-center"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_text_lead'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</h2>


<div class="btn-libre">
	<div class="btn-group btn-group-block">
	  <button class="btn bg-secondary" id="alltype"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_choice_all'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</button>
	  <button class="btn btn-sucess bg-success" id="libriste"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_choice_opensource'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</button>
	</div> 
</div>

<!-- divider element with text -->
<div class="divider"></div>

  <div class="columns">
  
  	<div class="column col-4 mt-2 closed centralised">
		<div class="card text-primary">
		  <div class="card-image">
			<img src="img/screen/discord.png" class="img-responsive">
		  </div>
		  <div class="card-header">
			<div class="card-title h5">Discord</div>
			<div class="card-subtitle "><span class="chip bg-warning">Closed source</span> <span class="chip bg-error"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_centralised'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</span> <span class="chip">discordapp.com</span></div>
		  </div>
		  <div class="card-body">
				<?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_discord_description'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>

		  </div>
		  <div class="card-footer">
			<a href="https://gnous.eu/discord" target="_blank" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_join'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</a>
		  </div>
		</div>
	</div>
	
	
    <div class="column col-4 mt-2 libre">
		<div class="card text-primary">
		  <div class="card-image">
			<img src="img/screen/mstdn.png" class="img-responsive">
		  </div>
		  <div class="card-header">
			<div class="card-title h5">Mastodon</div>
			<div class="card-subtitle "><span class="chip bg-success"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_opensource'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</span> <span class="chip bg-success"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_federated'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</span> <span class="chip">mstdn.gnous.eu</span></div>
		  </div>
		  <div class="card-body">
			<?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_mastodon_description'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>

		  </div>
		  <div class="card-footer">
			<a href="https://mstdn.gnous.eu" target="_blank" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_join'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
</a>
		  </div>
		</div>
	</div>
	
	<div class="column col-4 mt-2 libre">
		<div class="card text-primary">
		  <div class="card-image">
			<img src="img/screen/mtx.png" class="img-responsive">
		  </div>
		  <div class="card-header">
			<div class="card-title h5">Matrix</div>
			<div class="card-subtitle "><span class="chip bg-success"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_opensource'];
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
</span> <span class="chip bg-success"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_federated'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
</span> <span class="chip">mtx.gnous.eu</span></div>
		  </div>
		  <div class="card-body">
			<?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_matrix_description'];
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>

		  </div>
		  <div class="card-footer">
			<a href="https://mtx.gnous.eu" target="_blank" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_join'];
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
</a>
		  </div>
		</div>
	</div>

	<div class="column col-4 mt-2 libre centralised">
		<div class="card text-primary">
		  <div class="card-image">
			<img src="img/screen/git.png" class="img-responsive">
		  </div>
		  <div class="card-header">
			<div class="card-title h5">Gitea</div>
			<div class="card-subtitle "><span class="chip bg-success"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_opensource'];
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
</span> <span class="chip bg-error"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_centralised'];
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
</span> <span class="chip">git.gnous.eu</span></div>
		  </div>
		  <div class="card-body">
			<?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_git_description'];
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>

		  </div>
		  <div class="card-footer">
			<a href="https://git.gnous.eu" target="_blank" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_join'];
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
</a>
		  </div>
		</div>
	</div>
	
	<div class="column col-4 mt-2 centralised">
		<div class="card text-primary">
		  <div class="card-image">
			<img src="img/screen/mail.png" class="img-responsive">
		  </div>
		  <div class="card-header">
			<div class="card-title h5">GnousMail</div>
			<div class="card-subtitle "><span class="chip bg-error"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_centralised'];
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
</span> <span class="chip">newmail.gnous.eu</span></div>
		  </div>
		  <div class="card-body">
			<?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_mail_description'];
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>

		  </div>
		  <div class="card-footer">
			<a href="https://newmail.gnous.eu" target="_blank" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_join'];
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
</a>
		  </div>
		</div>
	</div>
	
	
	<div class="column col-4 mt-2">
		<div class="card text-primary">
		  <div class="card-image">
			<img src="img/screen/other.jpg" class="img-responsive">
		  </div>
		  <div class="card-header">
			<div class="card-title h5"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_purpose_title'];
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
</div>
			<div class="card-subtitle "><span class="chip bg-success"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_btn_unknown'];
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
</span> <span class="chip">*.gnous.eu</span></div>
		  </div>
		  <div class="card-body">
			<?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_purpose_description'];
$_prefixVariable29 = ob_get_clean();
echo $_prefixVariable29;?>

		  </div>
		  <div class="card-footer">
			<a href="mailto:mael@gnous.eu" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value['services_purpose_btn'];
$_prefixVariable30 = ob_get_clean();
echo $_prefixVariable30;?>
</a>
		  </div>
		</div>
	</div>
	
<?php ob_start();
$_smarty_tpl->_subTemplateRender('file:./../tpl/parts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable31 = ob_get_clean();
echo $_prefixVariable31;?>



<?php }
}
