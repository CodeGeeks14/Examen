<!DOCTYPE html>
<html lang="nl">
<head>
  <title>Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="ProductPage">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-content w3-display-container" style="max-width:100%;">
  <img class="mySlides" src="img/HomeDia1.jpg" style="width:100%">
  <img class="mySlides" src="img/HomeDia2.jpg" style="width:100%">
  <img class="mySlides" src="img/HomeDia3.jpg" style="width:100%">
  <img class="mySlides" src="img/HomeDia4.jpg" style="width:100%">
  <img class="mySlides" src="img/HomeDia5.jpg" style="width:100%;height:444px;">
  <img class="mySlides" src="img/HomeDia6.jpg" style="width:100%;height:444px;">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
  </div>
 
</div>
<b> Clubservice<br><br>
Clubhotline:</b>
<br><Br>
Telefonisch van maandag - vrijdag<br>

van 13:00 - 17:00 uur<br>

Telefoon: +49 7161 608 213<br>

Fax.       : +49 7161 608 308<br>

E-Mail:<br>

Insider-Club: insider-club(at)maerklin.com<br>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
</div>
</div>
	</div>
	</div>
</body>
</html>