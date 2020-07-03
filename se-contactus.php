
<?php
session_start(); 
include("DBConnection.php");
if(isset($_SESSION['login_user']))
{
?>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="style.css">
<style>
body{
margin: 0;
padding: 0;
background: url('t5.png');
background-size: cover;
}
.contact-form{
width: 85%;
max-width: 600px;
background: #f1f1f1;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
padding: 30px 40px;
box-sizing: border-box;
border-radius: 8px;
text-align: center;
box-shadow: 0 0 20px #000000b3;
font-family: "Montserrat",sans-serif;
}
.contact-form h1{
margin-top: 0;
font-weight: 200;
}
.txtb{
border:1px solid gray;
margin: 8px 0;
padding:12px 18px;
border-radius: 8px;
}
.txtb label{
display: block;
text-align: left;
color: #333;
text-transform: uppercase;
font-size: 14px;
}
.txtb input,.txtb textarea{
width:100%;
border:none;
background: none;
outline: none;
font-size: 18px;
margin-top: 6px;
}
.btn{
display: inline-block;
background: #9b59b6;
padding: 14px 0;
color: white;
text-transform: uppercase;
cursor: pointer;
margin-top: 8px;
width: 100%;
}
</style>
  
</head>

<body>
<div class="contact-form">
<h1> Contact Us </h1>

<div class="txtb">
<label>Full Name :</label>
<input type="text" name="" value="" placeholder="Enter Your Name">
</div>

<div class="txtb">
<label>Email :</label>
<input type="email" name="" value="" placeholder="Enter Your Email">
</div>

<div class="txtb">
<label>Phone :</label>
<input type="text" name="" value="" placeholder="Enter Your Phone Number">
</div>

<div class="txtb">
<label>Message :</label>
<textarea></textarea>
</div>

<input type="submit" class="btn" name="submit" value="Send">
</div>
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