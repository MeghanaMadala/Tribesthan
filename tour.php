<?php
session_start(); 
include("DBConnection.php");
if(isset($_SESSION['login_user']))
{
?>
<html>
<head>
	<title>
		Tribal Tourism
	</title>
	<link rel="stylesheet" type="text/css" href="tourstyle.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=3">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  min-width: 300px;
  min-height: 60px;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  font-weight: 700;
  color: #313133;
  background: #4FD1C5;
background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
  border: none;
  border-radius: 1000px;
  box-shadow: 12px 12px 24px rgba(79,209,197,.64);
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding: 10px;
  }

button::before {
content: '';
  border-radius: 1000px;
  min-width: calc(300px + 12px);
  min-height: calc(60px + 12px);
  border: 6px solid #00FFCB;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.button:hover, .button:focus {
  color: #313133;
  transform: translateY(-6px);
}

button:hover::before, button:focus::before {
  opacity: 1;
}

button::after {
  content: '';
  width: 30px; height: 30px;
  border-radius: 100%;
  border: 6px solid #00FFCB;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: ring 1.5s infinite;
}

button:hover::after, button:focus::after {
  animation: none;
  display: none;
}

@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 300px;
    height: 300px;
    opacity: 0;
  }
}

</style>
</head>


<body style="background-color:white; font:Georgia;">
	<div class="wrapper">
		<header>
		<img src="tourism.jpg" align="right"/>
		<div class="logo">
			<img src="green1.jpg" />
			<h1 style="color: #FB6423; font-family:garamond; size:40px;">TRIBESTHAN</h1>
			<h1 align="center" style="color: #49C80D;font-family:Snell Roundhand;"><i>Recreating passion for native fashion</i></h1>
             			
		</div>
		
			<nav>
			
				<ul>
					<li><a href="account.php">HOME</a></li>
					<li><a href="camping.php">TREKKING</a></li>
					<li><a href="camping.php">CAMPING</a></li>
					<li><a href="food.html">FOOD</a></li>
					<li><a href="gallery.html">PHOTO GALLERY</a></li>
			
				
				</ul>
			</nav>
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px; color: #0ACDE2;" >Kashmir-Kanyakumari</h1><br><br>
				<h1 style="text-align: center;font-size: 25px; color:#F2061F;">Explore... </h1><br>
				<h1 style="text-align: center;font-size: 25px; color:#F2061F;">Discover... </h1><br>
				<h1 style="text-align: center;font-size: 25px;color:#F2061F;">Adventure... </h1><br>
			
		<div class="wrap">
  <button class="button" onclick="location.href='camping.php'">Get Ready</button>
</div>
</div>
		</section>
		<footer>
			<p style="color:white;  text-align: center; ">
				<br><br>
				 Great expeditions are fulfilling, the travel experience is inspired by a great facilitator <br>
				All rights reserved.
			</p>
		</footer>
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