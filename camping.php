<?php
session_start(); 
include("DBConnection.php");
if(isset($_SESSION['login_user']))
{
?>
<html>
<head>
<title>Camping</title></head>
<style>
body{
background-color:#ffffff;}
.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
* {box-sizing: border-box;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: left;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
position:relative;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 350px;
  height:520px;
  background-color: #000000;
}

li a {
  display: block;
  color: #fff;
  padding: 20px 86px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
.ima{
width:1510px;
height:200px;}
table
{
font-family:cursive; 
font-size:20px;
background-color: black;
color:white;
width: 60%;
}
td{
padding: 25px;
}
.pic{
width:300px;
height:400px:}
</style>
<body>
<img src="campingcopy.jpg" class="ima">
<div style="float:left";>
<ul>
  <li><a href="tour.php">Home</a></li>
  <li><a href="se-contactus.php">Contact</a></li>
  <li><a href="attempt.html">About</a></li>
  <li><a href="food.html">Food Available</a></li>
  <li><a href="gallery.html">Photo Gallery</a></li>
  <li><a href="userhomepage.php">Main Page</a></li>
</ul></div>
<div style="float:right";>
<img src="tribe3.jpg"></div>
<div class="slideshow-container">
<div class="mySlides fade">
  <img src="araku1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="araku2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="araku3.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="lambasingi1.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="gallery6.jpeg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="gallery7.jpg" style="width:100%">
</div>

</div>
<br>
<br>
<div float:"center"; style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<img src="tour.png" class="ima" align="center">
<table align="center" color="black";>
<tr>
<td colspan="4"></td>
</tr>
<form method="post">
<tr>
<td><img src="camping3.jpg" class="pic"></a><br>Sky diving<br>Mizoram<br>9999rs<br>
<button class="glow-on-hover" type="submit" name="t1" >BOOK NOW</button></div>
</body></td>
<td><img src="camping4.jpg" class="pic"></a><br>Waterfalls<br>KASHMIR<br>7999rs<br>
<button class="glow-on-hover" type="submit" name="t2" >BOOK NOW</button></div>
</body></td>
<td><img src="borracaves.jpg" class="pic"></a><br>Borra Caves<br>Araku<br>4999rs<br>
<button class="glow-on-hover" type="submit" name="t3" >BOOK NOW</button></div>
</body></td>
<td><img src="tour.jpg"class="pic"></a><br>Pawna Lake<br>Nagaland<br>3999rs<br>
<button class="glow-on-hover" type="submit" name="t4" >BOOK NOW</button></div>
</body></td>

</tr>
<tr>
<td><img src="gallery6.jpeg" class="pic"></a><br>Sunrise<br>Nagaland Grasslands<br>4999rs<br>
<button class="glow-on-hover" type="submit" name="t5" >BOOK NOW</button></div>
</body></td>
<td><img src="waterfalljharkhand.jpg" class="pic"></a><br>Waterfalls<br>Jharkhand<br>5999rs<br>
<button class="glow-on-hover" type="submit" name="t6" >BOOK NOW</button></div>
</body></td>
<td><img src="gallery7.jpg" class="pic"></a><br>Trekking<br>Mizoram Mountains<br>8999rs<br>
<button class="glow-on-hover" type="submit" name="t7" >BOOK NOW</button></div>
</body></td>
<td><img src="araku3.jpg" class="pic"></a><br>Grasslands<br>Punjab<br>6999rs<br>
<button class="glow-on-hover" type="submit" name="t8" >BOOK NOW</button></div>
</body></td>
</tr>
</form>
</table>
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
</body>
</html>
<?php
if(isset($_POST['t1'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=45) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['t2'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=46) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['t3'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=47) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['t4'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=48) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['t5'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=49) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['t6'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=50) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['t7'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=51) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['t8'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=52) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
?>
<?php
}
else
{?>
<center><h2>SORRY!YOU ARE NOT LOGGED IN!</h2></center>
<a href="headerpage.html"><button class="button" style="magin:0 auto;">Back to home </button></a>

<?php
}
?>