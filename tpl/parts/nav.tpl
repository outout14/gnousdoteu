<!-- NAVBAR -->
<header class="navbar m-2">
  <section class="navbar-section">
    <a href="{{$ORIGINAL_URL}}/" class="btn btn-link text-light">{{$lang.nav_item_home}}</a>
    <a href="{{$ORIGINAL_URL}}/services" class="btn btn-link text-light">{{$lang.nav_item_services}}</a>
	<a href="{{$ORIGINAL_URL}}/about" class="btn btn-link text-light">{{$lang.nav_item_about}}</a>
  </section>
  <section class="navbar-center">
	<img src="{{$ORIGINAL_URL}}/img/gnous.svg" alt="GnousLOGO 2019">
  </section>
  <section class="navbar-section">
    <a href="{{$ORIGINAL_URL}}/donate" class="btn btn-link text-light">{{$lang.nav_item_donate}}</a>
    {{if $actual_lang eq 'fr'}}
    <a href="{{$ORIGINAL_URL}}/?lang=en" class="btn btn-link text-light"><span class="flag flag-us"> </span> English</a>
    {{/if}}
    {{if $actual_lang eq 'en'}}
    <a href="{{$ORIGINAL_URL}}/?lang=fr" class="btn btn-link text-light"><span class="flag flag-us"> </span> French</a>
    {{/if}}
  </section>
</header>