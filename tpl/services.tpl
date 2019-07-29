{{include file='./../tpl/parts/header.tpl'}}

{{include file='./../tpl/parts/nav.tpl'}}

<div class="container text-center">
	<h1>{{$lang.services_title}}</h1>
	<p>{{$lang.services_description_1}}<br>
	{{$lang.services_description_2}}</p>
</div>


<div class="container services bg-primary">

<h2 class="text-center">{{$lang.services_text_lead}}</h2>


<div class="btn-libre">
	<div class="btn-group btn-group-block">
	  <button class="btn bg-secondary" id="alltype">{{$lang.services_choice_all}}</button>
	  <button class="btn btn-sucess bg-success" id="libriste">{{$lang.services_choice_opensource}}</button>
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
			<div class="card-subtitle "><span class="chip bg-warning">Closed source</span> <span class="chip bg-error">{{$lang.services_btn_centralised}}</span> <span class="chip">discordapp.com</span></div>
		  </div>
		  <div class="card-body">
				{{$lang.services_discord_description}}
		  </div>
		  <div class="card-footer">
			<a href="https://gnous.eu/discord" target="_blank" class="btn btn-primary">{{$lang.services_btn_join}}</a>
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
			<div class="card-subtitle "><span class="chip bg-success">{{$lang.services_btn_opensource}}</span> <span class="chip bg-success">{{$lang.services_btn_federated}}</span> <span class="chip">mstdn.gnous.eu</span></div>
		  </div>
		  <div class="card-body">
			{{$lang.services_mastodon_description}}
		  </div>
		  <div class="card-footer">
			<a href="https://mstdn.gnous.eu" target="_blank" class="btn btn-primary">{{$lang.services_btn_join}}</a>
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
			<div class="card-subtitle "><span class="chip bg-success">{{$lang.services_btn_opensource}}</span> <span class="chip bg-success">{{$lang.services_btn_federated}}</span> <span class="chip">mtx.gnous.eu</span></div>
		  </div>
		  <div class="card-body">
			{{$lang.services_matrix_description}}
		  </div>
		  <div class="card-footer">
			<a href="https://mtx.gnous.eu" target="_blank" class="btn btn-primary">{{$lang.services_btn_join}}</a>
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
			<div class="card-subtitle "><span class="chip bg-success">{{$lang.services_btn_opensource}}</span> <span class="chip bg-error">{{$lang.services_btn_centralised}}</span> <span class="chip">git.gnous.eu</span></div>
		  </div>
		  <div class="card-body">
			{{$lang.services_git_description}}
		  </div>
		  <div class="card-footer">
			<a href="https://git.gnous.eu" target="_blank" class="btn btn-primary">{{$lang.services_btn_join}}</a>
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
			<div class="card-subtitle "><span class="chip bg-error">{{$lang.services_btn_centralised}}</span> <span class="chip">newmail.gnous.eu</span></div>
		  </div>
		  <div class="card-body">
			{{$lang.services_mail_description}}
		  </div>
		  <div class="card-footer">
			<a href="https://newmail.gnous.eu" target="_blank" class="btn btn-primary">{{$lang.services_btn_join}}</a>
		  </div>
		</div>
	</div>
	
	
	<div class="column col-4 mt-2">
		<div class="card text-primary">
		  <div class="card-image">
			<img src="img/screen/other.jpg" class="img-responsive">
		  </div>
		  <div class="card-header">
			<div class="card-title h5">{{$lang.services_purpose_title}}</div>
			<div class="card-subtitle "><span class="chip bg-success">{{$lang.services_btn_unknown}}</span> <span class="chip">*.gnous.eu</span></div>
		  </div>
		  <div class="card-body">
			{{$lang.services_purpose_description}}
		  </div>
		  <div class="card-footer">
			<a href="mailto:mael@gnous.eu" class="btn btn-primary">{{$lang.services_purpose_btn}}</a>
		  </div>
		</div>
	</div>
	
{{include file='./../tpl/parts/footer.tpl'}}


