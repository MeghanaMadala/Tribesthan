<?php
session_start(); 
include("DBConnection.php");
if(isset($_SESSION['login_user']))
{
?>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}
input[type=button]
{
border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
input[type=button]hover {
  opacity: 0.7;
}
.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h1 style="text-align:center">Handicrafts</h1>
<form  method="post">
<div class="card">
  <img src="puddingdessertbowl.jpeg" alt="handicraft" style="width:100%">
  <h1>Pudding dessert Bowl</h1>
  <p class="price">Rs 499</p>
  <p>Here are the perfect Caffeine Handmade Tribal Pudding Dessert Bowl(Set of 2)#Tribal print influenced.This cute combination with perfectic ceramic finish,enough to highlight your serving,giving an elite touch.</p>
<p><button type="submit" name="h5">Add to Cart</button></p>
 <p> <input type="button" value="View next item" onclick="window.location.href='w8.php'" ></p>
 <p><input type="button" value="View previous item" onclick="window.location.href='w6.php'" ></p>
</div>
  </form>
</body>
</html>
<?php
if(isset($_POST['h5'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=39) ";
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