<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Art Gallery India </title>
	<link rel="stylesheet" href="skin/default.css"/>
	<link rel="stylesheet" href="style/login.css"/>
	<script src="js/jquery.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/login.js"></script>
	
</head>
<body><div id="menu">
<ul class="leftmenu">
	<li ><a href="index.php">HOME</a></li>
	<li ><a href="about.php">ABOUT</a></li>
	<li ><a href="contact.php">CONTACT</a></li>
	<li ><a href="feedback.php">FEEDBACK</a></li>
</ul>
<ul class="rightmenu">
	<li style="float:right" ><a href="login.php" style="margin-top:0;
									background-color:#4a4c4f;
									color:#b7ccf7;
									font-size:20px;">LOGIN</a></li>
	<li style="float:right" ><a href="signup.php" >SIGNUP</a></li
</ul>
</div>
<div class="content">
	<div class="login" id="logindiv">
		<table>
		<form action="validation.php" method="post">
			<tr><td><label for="" class="textlabel">User Name</label></td><td><input type="text" required name="username" placeholder="Enter UserName" class="textfield"></td>
			</tr>
			<tr><td><label for="" class="textlabel">Password</label></td><td><input type="password" required name="password" placeholder="Enter Password" class="textfield"></td>
			</tr></table>
			<input type="submit" value="LogIn" id="loginbutton" >
		</form>
		<form action="signup.php"><input type="submit" value="SignUp" id="signupbutton"></form>
		<a href="resetPassword.php" id="forget">forgot password?</a>
	</div>
</div>

</body>
</html>