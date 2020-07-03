<?php
session_start(); 
include("DBConnection.php");
if(isset($_SESSION['login_user']))
{
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
<img src="admin.jpg" width="100%" height="300"><br><br><br><br>
<div class="container">
<center style="font-size:100%;">
<table align="center">
<tr><td><a href="userlist.php"><img src="users.jpg" width="500" height="300"></a></td>
<td><a href="paylist.php"><img src="pay.jpg" width="500" height="300"></a></td></tr>
</table>
</div>
<button class="bt car" onclick="location.href='logout.php'">LOGOUT>></button> 
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