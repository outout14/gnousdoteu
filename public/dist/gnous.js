<script type="text/javascript">

$("#libriste").click(function(){
  $(".columns").fadeOut(300);
  $(".closed").fadeOut(300);
  $(".libre").fadeIn(300);
  $(".columns").fadeIn(300);
});
$("#alltype").click(function(){
  $(".columns").fadeOut(300,function(){$(".libre").show(); $(".closed").show()});
  $(".columns").fadeIn(300);
});
</script>