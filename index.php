<?php session_start(); ?>
<?php

$id = $_POST['id'];
//取得使用者資料
$_SESSION['id'] = $id;
//SESSION['id'] 記錄使用者資料
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
</head>

<form name="form" method="post" action="index.php">
<body >
	<div id = "header">
		<a href = "index.php" class = "logo">
			<img src = "images/logo_resized.jpg" alt="">
		</a>
	</div>
	
	<div id="body">
		<div id="featured">
			<img src="images/background1_resized.jpg" alt="">
			<div>
				<span>準備好要檢查比賽資料嗎?</span>
				<a href="Instructions.php" class="more">GO!</a>
			</div>
		</div>
	</div>
	
	
	<div id="footer">
		<div>
			
			<p>
				&copy; copyright 2023 | all rights reserved.
			</p>
		</div>
	</div>
		


</body>
</form>
</html>

