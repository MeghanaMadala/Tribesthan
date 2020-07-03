<?php
session_start(); 
include("DBConnection.php");
if(isset($_SESSION['login_user']))
{
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Feedback Rating</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="style.css">
 <style>
.container{
    display:block;
    font-size:20;
border: 5px solid green;
   background:#f4a460;
    opacity:80%;
 width:600; margin-top:100px;
margin-left:450px;
 border-radius: 25px;
height:450;
}
input[type=submit]{
  border-radius: 4px;
  background-color:Aquamarine ;
  border: none;
color:white;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  cursor: pointer;
  margin: 5px;
}
input[type=submit]:hover {
  background-color: #dc143c;}
</style>
</head>
<body>
<center><h1>YOUR PAYMENT HAS BEEN SUCCESSFUL! YOU WILL RECEIVE YOUR PACKAGE AT THE ADDRESS GIVEN DURING REGISTRATION. </center></h1>
<br><br><center><h3>PLEASE RATE US! </center></h3>
<div class="container"> 
<form id="form">
  <fieldset class="stars">
    <input type="radio" name="stars" id="star1" ontouchstart="ontouchstart"/>
    <label class="fa fa-star" for="star1"></label>
    <input type="radio" name="stars" id="star2" ontouchstart="ontouchstart"/>
    <label class="fa fa-star" for="star2"></label>
    <input type="radio" name="stars" id="star3" ontouchstart="ontouchstart"/>
    <label class="fa fa-star" for="star3"></label>
    <input type="radio" name="stars" id="star4" ontouchstart="ontouchstart"/>
    <label class="fa fa-star" for="star4"></label>
    <input type="radio" name="stars" id="star5" ontouchstart="ontouchstart"/>
    <label class="fa fa-star" for="star5"></label>
    <input type="radio" name="stars" id="star-reset"/>
    <label class="reset" for="star-reset">reset</label>
    <figure class="face"><i></i><i></i>
      <u>
        <div class="cover"></div>
      </u>
    </figure>
  </fieldset>
</form>
 </div>
<br><br>
<center><h1>THANK YOU FOR YOUR FEEDBACK!!!</center></h1>
<form method="post">
<input type="submit" name="submit" value="Done">

</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
 {     
$sql = "DELETE FROM cart";
$query=mysqli_query($db,$sql);
?>
<script type="text/javascript">
window.location="account.php"
</script>
<?php
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