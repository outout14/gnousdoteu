{{include file='./../tpl/parts/header.tpl'}}

{{include file='./../tpl/parts/nav.tpl'}}

<div class="container">
	<h1>{{$lang.about_title}}</h1>
  <p>{{$lang.about_description_1}}</p>
	<p>{{$lang.about_description_2}}</p>
	<p>{{$lang.about_description_3}}</p>
  
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

{{include file='./../tpl/parts/footer.tpl'}}

