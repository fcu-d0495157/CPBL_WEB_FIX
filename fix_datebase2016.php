<?php session_start(); ?>
<?php

//建立SQLite連線
$dsn = "sqlite:CBPL2016_row.db";
$db = new PDO($dsn);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_SESSION['id'];
//從$_SESSION['id'] 取得 id

$num = $_SESSION['num'];

$num1 = $_GET['num'];

if($num1 != null){
	$num = $num1;
}

$_SESSION['num'] = $num;

//看看User是否有此操作人與場次
$sql = "select * from User where user == '".$id."' and num = '".$num."'";


$result = $db->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
if($row["user"] == $id && $row["num"] == $num){
		
	
	$start = $row["start"];
	$end = $row["end"];
	
}else{
	
	$start = 1;
	$end = 1;
	
}

//紀錄User在SESSION
$_SESSION['start'] = $start;
$_SESSION['end'] = $end;

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
-->
	</head>
<form name="form" method="post" action="update.php">

<body >
	<div id = "header">
		<a href = "num_logfile.php" class = "logo">
			<img src = "images/logo_resized.jpg" alt="">
		</a>
	
	<?php
	$sql = "select * from CBPL_pbp_2016 where num == '".$num."' and rowforgame = '".$end."'";
	
	if($result = $db->query($sql)){
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
			
		$base1 = $row["base1"];
		$base2 = $row["base2"];
		$base3 = $row["base3"];
		$out = $row["out"];
		$player = $row["Player"];
		$log = $row["log"];
		
	
	}else{
		
		echo "first error";
	}
	?>
	
	
	
	<!-- 檢測start與end -->
	<div>
		<label for = "start">start: </label>
		<?php echo $start; ?>
	</div>
	
	<div>
		<label for = "end">end: </label>
		<?php echo $end; ?>
	</div>
		
	<table border = "1">
		<tr>
			<td rowspan = "2"> 事件前壘包狀態 </td>
			<td width = "200">一壘</td>
			<td width = "200">二壘</td>
			<td width = "200">三壘</td>
			<td width = "200">出局數</td>
		</tr>
		<tr>
			<td width = "200"><?php 
				if(preg_match("/NA/",$base1)){
					echo "無人在壘";
				}else{
					echo $base1;
				}
		 ?></td>
		 
			<td width = "200"><?php 
				if(preg_match("/NA/",$base2)){
					echo "無人在壘";
				}else{
					echo $base2;
				}
		 ?></td>
		 
			<td width = "200"><?php 
				if(preg_match("/NA/",$base3)){
					echo "無人在壘";
				}else{
					echo $base3;
				}
		 ?></td>
		 
			<td width = "200"><?php echo $out ?></td>
		</tr>
		<br/>
	</table>
		
	<br/>
	<br/>
	<br/>
	
	<table >
		<tr>
			<!--<td width = "111"><font size = "10">經過事件</td>-->
			<td width = "815" ><font size = "10"><?php echo $log ?></td>		
		</tr>
	</table>
		
		
		<!--抓取下一個rowforgame-->
	<?php
		$end = $end + 1;
		$sql = "select * from CBPL_pbp_2016 where num == '".$num."' and rowforgame = '".$end."'";

		if($result = $db->query($sql)){
	
			$row = $result->fetch(PDO::FETCH_ASSOC);

			$after_base1 = $row["base1"];
			$after_base2 = $row["base2"];
			$after_base3 = $row["base3"];
			$after_out = $row["out"];
			$correct = $row["correct"];
		}else{

			echo '<meta http-equiv=REFRESH CONTENT=1;url=delect_user.php>';
		}
	?>
	
	<br/>
	<br/>
	<br/>

	<table border = "1">
		
		<tr>
			<td rowspan = "2">事件後壘包狀態</td>
			<td>一壘</td>
			<td>二壘</td>
			<td>三壘</td>
			<td>出局數</td>
			
		</tr>
		

		<tr>
			<td width = "200" >
			
			
			<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
			<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;"
				onchange="document.getElementById('after_base1').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
    
				
					<!--下一個rowforgame的站在一壘壘包的人-->
					<option value = "<?php echo $after_base1;?>" > 
						<?php if(preg_match("/NA/",$after_base1)){
								echo "無人在壘";
							}else{
								echo $after_base1;
							}?>
					</option>
					
					<!--rowforgame的打者-->
					<option value = "<?php echo $player;?>" > 
						<?php if(strcmp("",$player) == 0){
								echo "無打者";
							}else{
								echo $player;
						}?>
					</option>
						
					<!--rowforgame站在一壘壘包的人-->
					<option value = "<?php echo $base1;?>" > 
						<?php if(preg_match("/NA/",$base1)){
								echo "無人在壘";
							}else{
								echo $base1;
							}?>
					</option>
					
					<option value = "NA" >無人在壘</option>
			</select>
			
			<input type="text" name="after_base1" id="after_base1" value="<?php if(preg_match("/NA/",$after_base1)){
								echo "無人在壘";
							}else{
								echo $after_base1;
							}?>";
					placeholder="add/select a value" onfocus="this.select()"
					style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;"  >
			<!--<input name="idValue" id="idValue" type="hidden">-->

			</div>
			
			</td>
			
			<td width = "200" >
			
			<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
			<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;"
					onchange="document.getElementById('after_base2').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;"
					>
				
				<!--下一個rowforgame的站在二壘壘包的人-->
					<option value = "<?php echo $after_base2;?>" > 
						<?php if(preg_match("/NA/",$after_base2)){
									echo "無人在壘";
								}else{
									echo $after_base2;
								}?>
					</option>
					
					<!--rowforgame的打者-->
					<option value = "<?php echo $player;?>" >
						<?php if(strcmp("",$player) == 0){
								echo "無打者";
							}else{
								echo $player;
							}
						?>
					</option>
					
					<!--rowforgame站在一壘壘包的人-->
					<option value = "<?php echo $base1;?>" >
						<?php if(preg_match("/NA/",$base1)){
								echo "無人在壘";
							}else{
								echo $base1;
							}
						?>
					</option>
					
					<!--rowforgame站在二壘壘包的人-->
					<option value = "<?php echo $base2;?>" >
						<?php if(preg_match("/NA/",$base2)){
								echo "無人在壘";
							}else{
								echo $base2;
							}
						?>
					</option>
					
					<option value = "NA" >無人在壘</option>
			</select>
			
			<input type="text" name="after_base2" id="after_base2" 
					placeholder="add/select a value" onfocus="this.select()" value="<?php if(preg_match("/NA/",$after_base2)){
								echo "無人在壘";
							}else{
								echo $after_base2;
							}?>"
					style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;"  >
			<input name="idValue" id="idValue" type="hidden">

			</div>
				
				
			</td>
			
			<td width = "200" >
			
			<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
			<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;"
					onchange="document.getElementById('after_base3').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;"
					>
				
				<!--下一個rowforgame的站在三壘壘包的人-->
					<option value = "<?php echo $after_base3;?>" > 
						<?php if(preg_match("/NA/",$after_base3)){
								echo "無人在壘";
							}else{
								echo $after_base3;
							}
						?>
					</option>
					
					<!--rowforgame的打者-->
					<option value = "<?php echo $player;?>" > 
						<?php if(strcmp("",$player) == 0){
								echo "無打者";
							}else{
								echo $player;
							}
						?>
					</option>
					
					<!--rowforgame站在一壘壘包的人-->
					<option value = "<?php echo $base1;?>" >
						<?php if(preg_match("/NA/",$base1)){
								echo "無人在壘";
							}else{
								echo $base1;
							}
						?>
					</option>
					
					<!--rowforgame站在二壘壘包的人-->
					<option value = "<?php echo $base2;?>" > 
						<?php if(preg_match("/NA/",$base2)){
								echo "無人在壘";
							}else{
								echo $base2;
							}
						?>
					</option>
					
					<!--rowforgame站在三壘壘包的人-->
					<option value = "<?php echo $base3;?>" > 
						<?php if(preg_match("/NA/",$base3)){
								echo "無人在壘";
							}else{
								echo $base3;
							}
						?>
					</option>
					
					<option value = "NA" >無人在壘</option>
			</select>
			
			<input type="text" name="after_base3" id="after_base3" 
					placeholder="add/select a value" onfocus="this.select()" value="<?php if(preg_match("/NA/",$after_base3)){
								echo "無人在壘";
							}else{
								echo $after_base3;
							}?>"
					style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;"  >
			<input name="idValue" id="idValue" type="hidden">

			</div>
			
				
			</td>
			
			
			
			
			<td width = "200" >
				<select name="after_out" onchange = "onchange(after_out.value)">
					<option value = "<?php echo $after_out;?>" > <?php echo $after_out;?></option>
					<option value = "零出局" >零出局 </option>
					<option value = "一出局" >一出局 </option>
					<option value = "二出局" >二出局 </option>
				</select>
			</td>
		</tr>
		
		
		</table>
		
	
	
	<!--
	<div>
		<label for = "start">start: </label>
		<?php //echo $start; ?>
	</div>
	-->
	
	<!--
	<div>
		<label for = "end">end: </label>
		<?php //echo $end; ?>
	</div>
	-->
	
	<!--
	<div>
		<label for = "num_logfile">num_logfile: </label>
		<?php //echo $num_logfile; ?>
	</div>
	-->
	
	<!--
	<div>
		<label for = "num_logrow">num_logrow: </label>
		<?php //echo $num_logrow; ?>
	</div>
	-->
	
	<!--
	<div>
		<label for = "id">id: </label>
		<?php //echo $id; ?>
	</div>
	-->
	
	
	<br>
	<br>
	<input type="submit" name="button" value="確認" />
	<br>
	<br>
	<a href = "goback.php" >往前頁
	
	<br>
	<br>
	<div>
		<label for = "logo">PS:要回場次選單請按 中間Logo </label>
	</div>
	

	
	
	<div id="body">
		<ul>
			<li>
				<a >
					<img src="images/images_A.jpg" alt="">
				</a>
			</li>
			<li>
				<a >
					
				</a>
			</li>
			<li>
				<a >
					<img src="images/images_B.jpg" alt="">
					
				</a>
			</li>
		</ul>
	</div>
	
	
	
</body>
</form>
</html>

