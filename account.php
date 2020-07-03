<?php
session_start(); 
include("DBConnection.php");
?>
<head>
<link rel="stylesheet" href="homepage.css">
<style>
body{
background-color:black;
}
.container{
    display:block;
    font-size:20;
 width:90%; margin:0 auto;
 border-radius: 25px;}

.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
position: absolute;
top: 10px;
right: 10px;


}
.cart {
  border-color: #ff9800;
  color: orange;
}

.cart:hover {
  background: #ff9800;
  color: white;
}

.bt {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
position: absolute;
top: 10px;
left: 10px;
}
.car {
  border-color: #ff9800;
  color: orange;
}
.car:hover {
  background: #ff9800;
  color: white;
}
</style>
</head>
<body>
<?php
if(isset($_SESSION['login_user']))
{?>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <div class="bal">
<img src="slide1.jpg" style="width:100%;height:500">
<a href="attempt2.html" class="link"><button class="button"><span>LEARN MORE>> </span></button></a>
</div>
  <div class="text">ABOUT US</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <div class="bal">
<img src="slide4.jpg" style="width:100%;height:500">
<a href="tour.php" class="link"><button class="button"><span>LEARN MORE>> </span></button></a>
</div>
  <div class="text">TOURISM</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <div class="bal">
<img src="slide5.jpg" style="width:100%;height:500">
<a href="button5main.php" class="link"><button class="button"><span>LEARN MORE>> </span></button></a>
</div>
  <div class="text">BOOK TRIBAL EVENTS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <div class="bal">
<img src="slide2.jpg" style="width:100%;height:500">
<a href="se-contactus.php" class="link"><button class="button"><span>LEARN MORE>> </span></button></a>
</div>
  <div class="text">CONTACT US</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <div class="bal">
<img src="slide3.jpg" style="width:100%;height:500">
<a href="tribeswesupport.html" class="link"><button class="button"><span>LEARN MORE>> </span></button></a>
</div>
  <div class="text">TRIBES WE SUPPORT</div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<button class="btn cart" onclick="location.href='cart.php'">CART>></button> 
<div class="container">
<center style="font-size:100%;">
<table align="center">
<tr><td><a href="button1.php"><img src="button1.jpg" width="500" height="300"></a></td>
<td><a href="button2.php"><img src="button2.jpg" width="500" height="300"></a></td></tr>
<tr><td><a href="button3.php"><img src="button3.jpg" width="500" height="300"></a></td>
<td><a href="w3.php"><img src="button4.jpg" width="500" height="300"></a></td></tr>
</table>
</div>
<?php
}
else
{?>
<center><h2>SORRY!YOU ARE NOT LOGGED IN!</h2></center>
<a href="index.html"><button class="button" style="magin:0 auto;">Back to home </button></a>

<?php
}
?>
<button class="bt car" onclick="location.href='logout.php'">LOGOUT>></button> 
</body>