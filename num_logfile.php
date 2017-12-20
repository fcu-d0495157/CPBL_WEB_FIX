<?php session_start(); ?>
<?php
//建立SQLite連線
$dsn = "sqlite:CBPL2016_row.db";
$db = new PDO($dsn);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$num1 = $_GET['page'];
//取得頁數(頁碼)

if($num1 != null){
	
	$num = $num1*10+1-10;
	$max_data = $num+9;
	//取得適當區域的num
	
}else{
	$num = 1;
	$max_data = 10;
}


//$num_logfile = 0;
$num_logrow1 = 1;
$num_logrow2 = 2;

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
</head>

<form name="form" method="post" action="fix_datebase2016.php">
<body >
	<div id = "header">
		<a href = "num_logfile.php" class = "logo">
			<img src = "images/logo_resized.jpg" alt="">
		</a>
	
	
	<table border="0">
	
		<?php
			for(;$num <= $max_data;$num++){
		?>
		<tr>
			<?php
			
			
				
				//$num_logfile = 1;
				$sql = "select * from CBPL_pbp_2016 where num == '".$num."' and rowforgame = '".$num_logrow1."'";
				if($result = $db->query($sql)){
					
					$row = $result->fetch(PDO::FETCH_ASSOC);
					$away = $row["away"];
					$home = $row["home"];
	
				}else{
		
					echo "first error";
					
				}
				//$away 例如：義大(0)
				//$home 例如：XX(X)
				//取得 哪對棒球隊 跟 哪對棒球隊 比賽
			?>
			
			
			<td width = "200"><a href="fix_datebase2016.php?num=<?php echo $num;?>">第<?php echo $num;?>場</a></td>
			
			<?php
			$away = str_replace("（0）","",$away);
			$away = str_replace("(0)","",$away);
			$away = str_replace("（1）","",$away);
			$away = str_replace("(1)","",$away);
			
			
			
			
			$home = str_replace("（0）","",$home);
			$home = str_replace("(0)","",$home);
			$home = str_replace("（1）","",$home);
			$home = str_replace("(1)","",$home);
			
			//修改$away 與 $home 的後面得分。
			//$away 例如：義大
			//$home 例如：XX
			?>
			
			
			
			
			<td width = "300"><?php echo $away;?> vs <?php echo $home;?></td>
			<!-- 顯示出來 -->
			
		</tr>
		<?php
			}
		?>
		<!-- 顯示10比 比賽資訊 -->
		
		
		
	</table>
		
		
		<br>
		<br><br><br>
	
	<table>
		<tr>
			<?php
				for($page = 1;$page <= 12;$page++){
			?>
			<td width = "200"><a href="num_logfile.php?page=<?php echo $page;?>"><?php echo $page;?></a></td>
			<!-- 顯示 1 到 12 頁碼 -->
			<?php
				}
			?>
		</tr>
		
		<tr>
			<?php
				for($page = 13;$page <= 24;$page++){
			?>
			<td width = "200"><a href="num_logfile.php?page=<?php echo $page;?>"><?php echo $page;?></a></td>
			<!-- 顯示 13 到 24 頁碼 -->
			<?php
				}
			?>
		</tr>
		<!-- 顯示頁碼 -->
		
		
		
		<!--
		<tr>
			<td><?php //echo $num_logfile;?></td>
			<td><?php //echo $max_data;?></td>
			
		</tr>
		
		-->
	
	

		<?php 
			if($num1 != null){
				$now_page = $num1;
			}else{
				$now_page = 1;
			}
		
		?>
		目前頁數:<?php echo $now_page;?>
		
	</table>
	
	
	
	
	
	
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

