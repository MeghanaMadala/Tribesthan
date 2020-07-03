<?php
session_start(); 
include("DBConnection.php");
if(isset($_SESSION['login_user']))
{
?>
<html>
<head>
<title>fh</title>
<style>
body{
}
.flip-box {
  background-color: transparent;
  width: 400px;
  height: 350px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}


/* Style the back side */
.flip-box-back {
        background-image:url("3.jpg");
background-repeat: no-repeat;
  background-size: cover;
  
  color: white;
  transform: rotateY(180deg);
}
.head{
padding-top:0px;
height:200px;
background-color:lightcyan;
color:black;

}

.sidenav {
  height: 100%;
  width: 210px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:teal;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
}
.sidenav a:hover {
  color: #f1f1f1;
}
</style>
</head>


<body>

<div class="head">
    <h1 align="center" style=" font-family:comic sans ms">CLOTHING</h1>
   <h4 align="center" style="font-family:comic sans ms">Delivering the goods directly from the hands of tribals..</h4>
   <h6 align="center" style="font-family:comic sans ms">Click on the item you want to buy..</h6>
</div>

<div class="sidenav">
  <a href="#about" align="center">About</br>
  <a href="#services" align="center">Services</br>
  <a href="#clients" align="center">Clients</br>
  <a href="#contact"align="center">Contact
</div>


<form method="post">

<table align="center" cellpadding="20" cellspacing="20">
<tr>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d1.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:350</br><br/>Vendor:Bhagata<br/>Check this ravishing top with printed design..</br></br></br>Size:XL<br/>Material:Banynan cloth</br></br>
  <input type="submit" value="Add to cart" name="d1"/></h2>
    </div>
  </div>
 </div>
</td>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d2.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:390</br><br/>Vendor:Rona<br/>An overcoat which can dominate your entire attire..</br></br></br>Size:L<br/>Material:Shiffon</br></br>   
<input type="submit" value="Add to cart" name="d2"/></h2>
    </div>
  </div>
 </div>
</td>

</tr>

<tr>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d3.jpg" alt="Paris" style="width:400px;height:350px">
	  </div>
    <div class="flip-box-back">
    	 <h2>COST:450</br><br/>Vendor:Momba<br/>A strapped frock to bring back the boldness in you..</br></br></br>Size:M<br/>Material:Net</br></br>
 <input type="submit" value="Add to cart" name="d3"/></h2>
    </div>
  </div>
 </div>
</td>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d4.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:299</br><br/>Vendor:Chenchu<br/>Kalankari kurthi skirt</br></br></br>Size:XL<br/>Material:Silk</br></br> 
 <input type="submit" value="Add to cart" name="d4"/></button></h2>
    </div>
  </div>
 </div>
</td>

</tr>

<tr>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d5.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:490</br><br/>Vendor:Sugali<br/>A bell bottom can't ask more than the straps that encircle that.</br></br></br>Size:XXL<br/>Material:Cotton</br></br>
 <input type="submit" value="Add to cart" name="d5"/>
    </div>
  </div>
 </div>
</td>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d22.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:600</br><br/>Vendor:Chenchu<br/>Mokmul clothed clothes always have girls heart..</br></br></br>Size:L<br/>Material:Georgette</br></br> 
 <input type="submit" value="Add to cart" name="d6"/>
    </div>
  </div>
 </div>
</td>

</tr>

<tr>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d16.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:459</br><br/>Vendor:Rona<br/>Bringing out the mirrored skirt from the rona tribes..</br></br></br>Size:XXL<br/>Design:Kalankari design</br></br>
  <input type="submit" value="Add to cart" name="d7"/>
    </div>
  </div>
 </div>
</td>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d17.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:250</br><br/>Vendor:Surayya<br/>Get ready to flaunt yourself in this cute skirt</br></br></br>Size:S<br/>Material:Nylon</br></br>
 <input type="submit" value="Add to cart" name="d8"/>
    </div>
  </div>
 </div>
</td>

</tr>

<tr>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d115.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:389</br><br/>Vendor:Jagiah<br/>Mirros.. orange.. Red.. Crop top.. Seriously! do girls need any more reasons to go gaga over a costume.</br></br></br>Size:L<br/>Material:Crepe</br></br>
  <input type="submit" value="Add to cart" name="d9"/></h2>
    </div>
  </div>
 </div>
</td>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d15.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:199</br><br/>Vendor:Rama<br/>Reddish skirt with patched design</br></br></br>Size:M<br/>Material:Cotton</br></br>
  <input type="submit" value="Add to cart" name="d10"/></h2>
    </div>
  </div>
 </div>
</td>

</tr>

<tr>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d8.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:299</br><br/>Vendor:Jagiah<br/>Thigh high top with uneven length to add a crispy touch to your attire.</br></br>Size:L<br/>Material:Pattu</br></br>
 <input type="submit" value="Add to cart" name="d1"/>
    </div>
  </div>
 </div>
</td>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="d11.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
    <div class="flip-box-back">
    	 <h2>COST:340</br><br/>Vendor:Sippi<br/>The old and obviously the bold presenting the sippi's very own brown fabric..</br></br>Size:XL<br/>Material:Nylon<br/></br></br>
 <input type="submit" value="Add to cart" name="d11"/>
    </div>
  </div>
 </div>
</td>

</tr>
</table>
</form>
<?php

if(isset($_POST['d1'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=11) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['d2'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=12) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['d3'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=13) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['d4'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=14) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}



if(isset($_POST['d5'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=15) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['d6'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=16) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['d7'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=17) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['d8'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=18) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['d9'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=19) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['d10'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=20) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['d11'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=21) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['d12'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=22) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

?>

</body>
</html>
<?php
}
else
{?>
<center><h2>SORRY!YOU ARE NOT LOGGED IN!</h2></center>
<a href="headerpage.html"><button class="button" style="magin:0 auto;">Back to home </button></a>

<?php
}
?>