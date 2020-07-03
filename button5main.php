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
    <h1 align="center" style=" font-family:comic sans ms">EVENT</h1>
   <h4 align="center" style="font-family:comic sans ms">Want to celebrate an event in a unique way...</h4>
   <h6 align="center" style="font-family:comic sans ms">Then select from the below and make your event a memorable one..</h6>
</div>

<div class="sidenav">
  <a href="#about" align="center">HOME</a></br>
</div>




<form method="post">
<table align="center" cellpadding="20" cellspacing="20">
<tr>

<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="bortal.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:1500 per performance</br><br/>Dance form bortal</br></br>
<input type="submit" value="Add to cart " name="e1"/></h2>
    </div>
  </div>
 </div>
</td>



<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="bihu.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 
    	 <h2>COST:2500 per performance</br><br/>Dance form Bihu</br></br>
		 <input type="submit" value="Add to cart " name="e2"/></h2>
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
      <img src="dandiya.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	
    	 <h2>COST:3500 per performance</br><br/>Dance form dandiya</br></br>
		 <input type="submit" value="Add to cart " name="e3"/></h2>
    </div>
  </div>
 </div>
</td>



<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="dhimsa.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:1500 per performance</br><br/>Dance form dhimsa</br></br>
<input type="submit" value="Add to cart " name="e4"/></h2>
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
      <img src="fugdi.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    
    	 <h2>COST:3000 per performance</br><br/>Dance form fugdi</br></br>
		 <input type="submit" value="Add to cart " name="e5"/></h2>
    </div>
  </div>
 </div>
</td>



<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="garba.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    
    	 <h2>COST:1500 per performance</br><br/>Dance form garba</br></br>
		 <input type="submit" value="Add to cart " name="e6"/></h2>
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
      <img src="kalbelia.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:2500 per performance</br><br/>Dance form kalbeliya</br></br>
<input type="submit" value="Add to cart " name="e7"/></h2>
    </div>
  </div>
 </div>
</td>



<td>
 <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="raas leela.jpg" alt="Paris" style="width:400px;height:350px">
    </div>
	 
    <div class="flip-box-back">
    	 <h2>COST:4500 per performance</br><br/>Dance form raas leela</br></br>
<input type="submit" value="Add to cart " name="e8"/></h2>
    </div>
  </div>
 </div>
</td>

</tr>



</table>
</form>





<?php

if(isset($_POST['e1'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=53) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['e2'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=54) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['e3'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=55) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['e4'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=56) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}



if(isset($_POST['j5'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=57) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['e6'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=58) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['e7'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=59) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['e8'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=60) ";
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