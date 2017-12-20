<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//建立SQLite連線
$dsn = "sqlite:CBPL2016_row.db";
$db = new PDO($dsn);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$num = $_SESSION['num'];

$id = $_SESSION['id'];

$end = $_SESSION["end"];
//echo $num;    1
//echo $id; 	hj
//echo $end;	1

$end = $end+1;
//echo $end;	2

$start = $_SESSION["start"];

$sql = "select * from CBPL_pbp_2016 where num == '".$num."' and rowforgame = '".$end."'";
//$sql = "select * from CBPL_pbp_2016 where num == 1 and rowforgame = 2;

if($result = $db->query($sql)){
		
	$row = $result->fetch(PDO::FETCH_ASSOC);
	
	$base1 = $row["base1"];
	$base2 = $row["base2"];
	$base3 = $row["base3"];
	$correct = $row["correct"];
	$out = $row["out"];
	
}else{
	echo "查詢資料失敗...<br/>";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=fix_datebase2016.php>';
}

$after_base1 = $_POST["after_base1"];
$after_base2 = $_POST["after_base2"];
$after_base3 = $_POST["after_base3"];

if(strcmp($after_base1,"無人在壘") == 0 || strcmp($after_base1,"無打者") == 0){
	$after_base1 = "NA";
}

if(strcmp($after_base2,"無人在壘") == 0 || strcmp($after_base2,"無打者") == 0){
	$after_base2 = "NA";
}

if(strcmp($after_base3,"無人在壘") == 0 || strcmp($after_base3,"無打者") == 0){
	$after_base3 = "NA";
}



$after_out = $_POST["after_out"];





if(strcmp($base1,$after_base1) == 0 && strcmp($base2,$after_base2) == 0 && strcmp($base3,$after_base3) == 0 && strcmp($out,$after_out) == 0){
		
	$sql = "update CBPL_pbp_2016 set base1 = '".$after_base1."', base2 = '".$after_base2."', base3 = '".$after_base3."', out = '".$after_out."', correct = '".$correct."' where num = '".$num."' AND rowforgame = '".$end."'";
	
}else{
	
	$sql = "update CBPL_pbp_2016 set base1 = '".$after_base1."', base2 = '".$after_base2."', base3 = '".$after_base3."', out = '".$after_out."', correct = '".$correct."' where num = '".$num."' AND rowforgame = '".$end."'";
		
}

if($result = $db->exec($sql)){
		
		echo 'CBPL資料跟改成功!</br>';
		$sql = "select * from User where user == '".$id."' and num = '".$num."'";


		$result = $db->query($sql);
		$row = $result->fetch(PDO::FETCH_ASSOC);
		if($row["user"] == $id && $row["num"] == $num){
		
			$sql = "update User set start = '".$start."', end = '".$end."' where num = '".$num."' and user = '".$id."'";
	
		}else{
	
			$sql = "insert into User(user,num,start,end) values ('".$id."','".$num."','".$start."','".$end."')";

		}


		if($result = $db->exec($sql)){
		
			echo '資料跟改成功!</br>';
			echo '<meta http-equiv=REFRESH CONTENT=1;url=fix_datebase2016.php>';
	
		}else{
	
			echo 'User資料跟改失敗!</br>';
			echo '<meta http-equiv=REFRESH CONTENT=1;url=fix_datebase2016.php>';
		}	
	
	}else{
		
		echo 'CBPL資料跟改失敗!</br>';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=delect_user.php>';
		
}


?>
	


	
	
	
	
	