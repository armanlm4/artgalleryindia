<?php

$firstname="";
$lastname="";
$email="";
$phone="";
$password1="";
$password2="";
$location="";
$dob="";
$gender="";





$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$location=$_POST['location'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
?>




<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Art Gallery India </title>
	<link rel="stylesheet" href="skin/default.css"/>
	<link rel="stylesheet" href="style/signup.css"/>
	<script src="js/jquery.js"></script>
	<script src="js/slider.js"></script>
	
</head>
<body><div id="menu">
<ul class="leftmenu">
	<li ><a href="index.php">HOME</a></li>
	<li ><a href="about.php">ABOUT</a></li>
	<li ><a href="contact.php">CONTACT</a></li>
	<li ><a href="feedback.php">FEEDBACK</a></li>
</ul>
<ul class="rightmenu">
	<li style="float:right" ><a href="login.php" >LOGIN</a></li>
	<li style="float:right" ><a href="signup.php" style="margin-top:0;
									background-color:#4a4c4f;
									color:#b7ccf7;
									font-size:20px;" >SIGNUP</a></li
</ul>
</div>
<div class="content">
<div >
<h1 style="color:white;"><?php
echo $firstname;
?></h1>
<h1 style="color:white;"><?php
echo $lastname;
?></h1>
<h1 style="color:white;"><?php
echo $email;
?></h1>
<h1 style="color:white;"><?php
echo $phone;
?></h1>
<h1 style="color:white;"><?php
echo $password1;
?></h1>
<h1 style="color:white;"><?php
echo $password2;
?></h1>
<h1 style="color:white;"><?php
echo $location;
?></h1>
<h1 style="color:white;"><?php
echo $dob;
?></h1>
<h1 style="color:white;"><?php
echo $gender;
?></h1>
</div>



</div>
</body>
</html>