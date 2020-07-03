<?php
session_start(); 
include("DBConnection.php");
if(isset($_SESSION['login_user']))
{
?>
<html>
<head><title>Cosmetics</title>
<style>
 .addition {
          width: 90%;
          padding: 20px 20px;
          cursor: default !important;
        }
        
        .itembox {
          cursor: pointer;
          background: #fff;
          line-height: 20px;
          box-shadow: 0 -1px 0 #e0e0e0, 0 0 2px rgba(0, 0, 0, .12), 0 2px 4px rgba(0, 0, 0, .24);
          display: block;
          padding:60px;
          text-align: left;
          width:90%;
border: 5px solid green;
        }
        
        .btn {
          background-color: transparent;
          border: 5px solid orange;
          color: #616161;
          text-align: center;
          /*height: 50px;*/
          line-height: 50px;
          width: 150px;
          box-sizing: border-box;
          font-size: 22px;
          font-weight: bold;
          cursor: pointer;
        }

</style>
</head>
<body>
<img src="head.jpg" width="100%" height="250">
<form  method="post">
<div class="itembox addition">
  <img src="shampoo.jpg" style="width:120px;height:100px;margin-right:15px;float:left;">
  <br />
  <p style="font-size:20"><b>Fauna & Flora Shampoo(100ml)</b></p>Pamper your gorgeous mane with our all new,all natural,eco-friendly shampoo!<br>Rs.200\-
  <input type="submit" class="btn" style="float: right;" name="c1" value="Add to cart">
</div>
</form>
<form method="post">
<div class="itembox addition">
  <img src="scrub.jpg" style="width:120px;height:100px;margin-right:15px;float:left;">
  <br />
  <p style="font-size:20"><b>Khadi Organic face scrub(100gm)</b></p>Gift your skin with our all new activated charcoal formula and feel the difference within the first week!<br>Rs.250\-

 <input type="submit" class="btn" style="float: right;" name="c2" value="Add to cart">
</div>
</form>
<form  method="post">
<div class="itembox addition">
  <img src="agu.jpg" style="width:120px;height:100px;margin-right:15px;float:left;">
  <br />
  <p style="font-size:20"><b>Agu body food for men(150gm)</b></p>Give your face the protection it needs in an all natural Agu-tribe way!<br>Rs.300\-
  <input type="submit" class="btn" style="float: right;" name="c3" value="Add to cart">
</div>
</form>
<form  method="post">
<div class="itembox addition">
  <img src="cream.jpg" style="width:120px;height:100px;margin-right:15px;float:left;">
  <br />
  <p style="font-size:20"><b>Ayu tribe Anti-Ageing Night Cream(200gm)</b></p>Get rid of those nasty wrinkles and age lines with our all new and improved formula from the core of Ayu tribe.<br>Rs.450\-
 <input type="submit" class="btn" style="float: right;" name="c4" value="Add to cart">
</div>
</form>
<form method="post">
<div class="itembox addition">
  <img src="facewash.jpg" style="width:120px;height:100px;margin-right:15px;float:left;">
  <br />
  <p style="font-size:20"><b>Herbal Rewards Tribal Facewash(150ml) </b></p>Our all new shea butter formula gives your skin all the moisture it deserves. Because that's what tribal care is all about!<br>Rs.180\-
 <input type="submit" class="btn" style="float: right;" name="c5" value="Add to cart">
</div>
</form>
<form  method="post">
<div class="itembox addition">
  <img src="multani.jpg" style="width:120px;height:100px;margin-right:15px;float:left;">
  <br />
  <p style="font-size:20"><b>Natural Earth Clay(1 kg) </b></p>Collected especially from volcanic rocks, this Earth clay makes your skin glow like never before!<br>Rs.100\-
  <input type="submit" class="btn" style="float: right;" name="c6" value="Add to cart">
</div></form>
<form  method="post">
<div class="itembox addition">
  <img src="yeka.jpg" style="width:120px;height:100px;margin-right:15px;float:left;">
  <br />
  <p style="font-size:20"><b>Herbal hair oil(100ml) </b></p>Handmade recipe by the Yeka tribe, this hair oil is the one and only solution to all your hair problems!<br>Rs.130\-
  <input type="submit" class="btn" style="float: right;" name="c7" value="Add to cart">
</div></form>
<form  method="post">
<div class="itembox addition">
  <img src="toner.jpg" style="width:120px;height:100px;margin-right:15px;float:left;">
  <br />
  <p style="font-size:20"><b>VedicLine Green Apple Toner(100ml) </b></p>This green apple formula gives your face all the care that Mother Nature has to give!<br>Rs.250\-
 <input type="submit" class="btn" style="float: right;" name="c8" value="Add to cart">
</div></form>
<form  method="post">
<div class="itembox addition">
  <img src="shampoo2.jpg" style="width:120px;height:100px;margin-right:15px;float:left;">
  <br />
  <p style="font-size:20"><b>Vilvah Anti Dandruff Shampoo(200ml) </b></p>Made by the Gora tribe, this shampoo is the ultimate solution to your dandruff problems!<br>Rs.270\-
 <input type="submit" class="btn" style="float: right;" name="c9" value="Add to cart">
</div></form>
<form  method="post">
<div class="itembox addition">
  <img src="oil.jpg" style="width:120px;height:100px;margin-right:15px;float:left;">
  <br />
  <p style="font-size:20"><b>Sacred Earth Organic Massage Oil(100ml) </b></p>The only massage oil that takes away all your body pains in the split of a second!s<br>Rs.300\-
  <input type="submit" class="btn" style="float: right;" name="c10" value="Add to cart">
</div></form>



<?php

if(isset($_POST['c1'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=1) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['c2'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=2) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}
if(isset($_POST['c3'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=3) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['c4'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=4) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}



if(isset($_POST['c5'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=5) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['c6'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=6) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['c7'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=7) ";
$query=mysqli_query($db,$sql);
 if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['c8'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=8) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}


if(isset($_POST['c9'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=9) ";
$query=mysqli_query($db,$sql);
if($query)
{
echo '<script>alert("Added to cart")</script>';
}

}

if(isset($_POST['c10'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=10) ";
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