<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//建立SQLite連線
$dsn = "sqlite:CBPL2016_row.db";
$db = new PDO($dsn);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$num = $_SESSION['num'];

$id = $_SESSION['id'];

//$end = $_SESSION["end"];

//$start = $_SESSION["start"];

//echo $num;
//echo "<br/>";
//echo $id;
//echo $num;
//echo $num;


$sql = "delete from User where num == '".$num."' and user == '".$id."'";

if($result = $db->exec($sql)){
		
	echo 'User資料刪除成功!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=num_logfile.php>';
	
}else{
	
	echo '<br/>User資料刪除失敗!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=num_logfile.php>';
}	


?>