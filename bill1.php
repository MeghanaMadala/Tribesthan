<?php
session_start(); 
include("DBConnection.php");
if(isset($_SESSION['login_user']))
{
?>
<html>
<head>
<title>h</title>

<style>
body
{
margin:0;
padding:0;
background-color: wheat;
}

.tab
{
margin: 0 auto;

left:20%;
width:30%;
border-radius:3px;
}
.tab h1
{
margin:1;
padding-bottom:20px;
color:black;
text-align:center;
text-transform:uppercase;
font-size:40px;
}
.tab table
{
border:5px solid black;
border-radius:2px;
width:10%;
height:20%;
}
.tab table td
{
font-size:20px;
padding-top:10px;
}
.tab p
{
margin:0;
padding-right:30px;
color:black;
text-transform:uppercase;
font-weight:bold;
font-family:arial;
}
.tab input
{
width:50%;
margin-bottom:20px;
}
.tab input[type=submit]
{
height:30px;
width:100px;
color:white;
background:black;
font-size:15px;
cursor:pointer;
border-radius:5px;
border:white;
outline:none;
margin-top:5%;
}
.tab input[type=submit]:hover
{
opacity:0.8;
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
h1{
font-size:60px;
color:black;
font-family:cursive;
padding-top:25px;
}
table {
  border-collapse: collapse;
position:absolute;

left:20%;
width:35%;
}

th,td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

tr:nth-child(odd){background-color: #dcdcdc}

table {
  border: 1px solid white;
}

th {
  background-color:cornflowerblue;
  color: black;
}
tr:hover {background-color: #DAA520;}
* {
  box-sizing: border-box;
}
* {
  box-sizing: border-box;
}


</style>
</head>
<body>
<h3><marquee direction="right" scrollamount="15" style="color:black">BILL</marquee></h3>

<?php

$sql1 = "SELECT * FROM cart";
$result1 = mysqli_query($db, $sql1);
if(mysqli_num_rows($result1)>0)
{
?>
<table class="schemes"> 
<tr>
<th> Name </th>
<th> Price </th>
</tr>
 
<?php 
while($row = mysqli_fetch_assoc($result1))  {
?>
<tr>
<td><?php echo $row["name"];?> </td>
<td><?php echo $row["price"];?> </td>
</tr>
<?php
    }
}
  ?>
</table>
<?php
$i= date('Y-m-d');
echo "<h4 >The total amount is:</h4>";
$sql = "SELECT sum(price) as total FROM cart";
  $result=mysqli_query($db,$sql);

while ($row = mysqli_fetch_assoc($result))
{ 
$tot=$row['total'];
   echo "<h4 >$tot</h4>";
}

echo "<input type='submit'   onclick='msg()' value='Proceed'>";
$sql= "INSERT into payment values ('$_SESSION[login_user]', '$tot', '$i');";
$result = mysqli_query($db,$sql);
?>
<script>
function msg()
{
alert("Are you sure?");

window.open("feedback.php");
}
</script>

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