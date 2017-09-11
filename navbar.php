<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="sticky-anchor"></div>
<div id="sticky">
<div class="NavBar">
<?php include("db_connect.php");
   $collection = $colGebruiker; //Selecteer je collectie voor de query
$query = $collection->find(); //Dit is je query?>
<div class="HomeButton"><a style="color:white;" class="HomeBtn" href="index.php?content=Homepage">Home</a>
	  <a href="index.php?content=service-help" style="color:white;" class="ServiceHelp">Service/Help</a>
	  
	  
	  <?php
	  include("db_connect.php");
	  if(isset($_SESSION["id"]))
                { 
			echo '<a style="color:white;font-size:20px;margin-left:50px;" href="index.php?content=logout" class="button">Uitloggen</a>';
			echo '<a style="color:white;font-size:20px;margin-left:50px;" href="index.php?content=Wensenlijst" class="button">Wensenlijst</a>';
		   }
	  else{ echo '<a style="color:white;" class="MyAccount" href="index.php?content=LoginRegister">Account</a>';
        }
		
	  		?>

		<a href="index.php?content=contact"style="color:white;" class="Contact">Contact</a>
		
	  </div>
	</div>
	</div>
</body>
</html>
<script>
    function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#sticky').addClass('stick');
        $('#sticky-anchor').height($('#sticky').outerHeight());
    } else {
        $('#sticky').removeClass('stick');
        $('#sticky-anchor').height(0);
    }
}

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});

var dir = 1;
var MIN_TOP = 200;
var MAX_TOP = 350;

function autoscroll() {
    var window_top = $(window).scrollTop() + dir;
    if (window_top >= MAX_TOP) {
        window_top = MAX_TOP;
        dir = -1;
    } else if (window_top <= MIN_TOP) {
        window_top = MIN_TOP;
        dir = 1;
    }
    $(window).scrollTop(window_top);
    window.setTimeout(autoscroll, 100);
}

</script>