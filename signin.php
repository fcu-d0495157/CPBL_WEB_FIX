<?php session_start(); ?>


<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
</head>

<form name="form" method="post" action="index.php">
<body >
	<div id = "header">
		<a href = "signin.php" class = "logo">
			<img src = "images/logo_resized.jpg" alt="">
		</a>
	</div>
	
	<div id="body">
		User：<input type="text" name="id" /> <br>
		<input type="submit" name="button" value="登入" />&nbsp;&nbsp;
	</div>
	
	
	<div id="footer">
		<div>
			
			<p>
				&copy; copyright 2017 | all rights reserved.
			</p>
		</div>
	</div>
		


</body>
</form>
</html>

