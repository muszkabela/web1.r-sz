<!-- Grid row -->
<link rel="stylesheet" href="./templates/pages/galeria/style.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./templates/pages/galeria/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
<script>
$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});

</script>
<div class="row">
  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">Összes</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Virágok</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Különlegesség</button>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

