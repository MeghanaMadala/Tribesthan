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
  <img src="dhokrametalcraft.png" alt="handicraft" style="width:100%">
  <h1>Dhokra Metal Craft</h1>
  <p class="price">Rs 2999</p>
  <p>Picasso's monumental cubist sculpture was regarded as radical in its early years and Motif is a repeated pattern element in iconography.#Motif</p>
  <p><button type="submit" name="h4">Add to Cart</button></p>
 <p><input type="button" value="View next item" onclick="window.location.href='w7.php'" ></p>
  <p><input type="button" value="View previous item" onclick="window.location.href='w5.php'" ></p>
</div>
  </form>
</body>
</html>
<?php
if(isset($_POST['h4'])) { 
           
$sql = "INSERT INTO `cart`(select * from products where id=38) ";
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