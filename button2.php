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
        background-image:url("rr2.jpg");
background-repeat: no-repeat;
  background-size: cover;
  color: black;
  transform: rotateY(180deg);
}
.head{
padding-top:0px;
height:200px;
background-color:gray;
color:black;

}

.sidenav {
  height: 100%;
  width: 210px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}
.sidenav a:hover {
  color: #f1f1f1;
}
</style>
</head>


<body>

<div class="head">
    <h1 align="center" style=" font-family:comic sans ms">JEWELLERY</h1>
   <h4 align="center" style="font-family:comic sans ms">Delivering the goods directly from the hands of tribals..</h4>
   <h6 align="center" style="font-family:comic sans ms">Click on the item you want to buy..</h6>
</div>

<div class="sidenav">
  <a href="#about" align="center">About</a></br>
  <a href="#services" align="center">Services</a></br>
  <a href="#clients" align="center">Clients</a></br>
  <a href="#contact"align="center">Contact</a>
</div>




<form method="post">
<table align="center" cellpadding="20" cellspacing="20">
<tr>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="j3.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:350</br><br/>Vendor:Bhagata<br/>The elegant yet simple neck ornament..</br></br><br/>Material:Oxidised black metal<br/></br></br>
<input type="submit" value="Add to cart " name="j1"/></h2>
    </div>
  </div>
 </div>
</td>



<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="j4.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:390</br><br/>Vendor:Rona<br/>This choker with a simple chain brings out the diva aura in you.</br></br><br/>Material:Oxidised black metal<br/></br>
<input type="submit" value="Add to cart " name="j2"/></h2>
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
      <img src="j1.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:450</br><br/>Vendor:Momba<br/><br/>Tight necked necklace for party ware dresses...</br></br><br/>Material:Oxidised black metal</br><br/></br>
<input type="submit" value="Add to cart " name="j3"/></h2>
    </div>
  </div>
 </div>
</td>



<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="j2.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:299</br><br/>Vendor:Chenchu<br/><br/>Neck tight chain..</br></br><br/>Material:Oxidised black metal</br><br/></br>
<input type="submit" value="Add to cart " name="j4"/></h2>
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
      <img src="j6.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:490</br><br/>Vendor:Sugali<br/></br><br/>Thin fashionable chain which suits for all the outfits in your wardrobe..</br></br><br/>Material:Oxidised black metal</br>
<input type="submit" value="Add to cart " name="j5"/></h2>
    </div>
  </div>
 </div>
</td>



<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="j5.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:600</br><br/>Vendor:Chenchu<br/><br/>Fashionable neck chain with designer choker.</br></br><br/>Material:Oxidised black metal</br></br><br/>
<input type="submit" value="Add to cart " name="j6"/></h2>
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
      <img src="j22.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:459</br><br/>Vendor:Rona<br/><br/>The perfect tribal neck piece</br></br><br/>Material:large beads</br><br/></br>
<input type="submit" value="Add to cart " name="j7"/></h2>
    </div>
  </div>
 </div>
</td>



<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="j23.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:250</br><br/>Vendor:Surayya<br/><br/>Beaded neck piece</br></br><br/>Material:Beads and wool</br><br/></br>
<input type="submit" value="Add to cart " name="j8"/></h2>
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
      <img src="j21.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:389</br><br/>Vendor:Jagiah<br/><br/>Royal thorn design</br></br><br/>Material:Metal and beads.</br><br/></br>
<input type="submit" value="Add to cart " name="j9"/></h2>
    </div>
  </div>
 </div>
</td>



<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="j24.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:199</br><br/>Vendor:Rama<br/><br/>The rings will add your grace to another level.</br></br><br/>Material:Clay</br></br><br/>
<input type="submit" value="Add to cart " name="j10"/></h2>
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
      <img src="j19.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:299</br><br/>Vendor:Jagiah<br/><br/>Hangings from neck..</br></br><br/>Material:Wood</br></br><br/>
<input type="submit" value="Add to cart " name="j11"/></h2>
    </div>
  </div>
 </div>
</td>



<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="j27.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:340</br><br/>Vendor:Sippi<br/>Desi necklace </br></br><br/>Material:Oxidised metal</br><br/>
<input type="submit" value="Add to cart " name="j12"/></h2>
    </div>
  </div>
 </div>
</td>

</tr>
</table>
</form>





<?php

if(isset($_POST['j1'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=23) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['j2'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=24) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['j3'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=25) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['j4'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=26) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}



if(isset($_POST['j5'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=27) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['j6'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=28) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['j7'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=29) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['j8'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=30) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['j9'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=31) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['j10'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=32) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['j11'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=33) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['j12'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=34) ";
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