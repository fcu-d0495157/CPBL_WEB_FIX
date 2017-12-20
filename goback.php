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

$start = $_SESSION["start"];

$sql = "select * from User where user == '".$id."' and num = '".$num."'";

$result = $db->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
if($row["user"] == $id && $row["num"] == $num && $end > 1){
	
	$end = $end-1;	
	$sql = "update User set start = '".$start."', end = '".$end."' where num = '".$num."' and user = '".$id."'";
	
	if($result = $db->exec($sql)){
		
			echo '資料跟改成功!</br>';
			echo '<meta http-equiv=REFRESH CONTENT=1;url=fix_datebase2016.php>';
	
		}else{
	
			echo 'User資料跟改失敗!</br>';
			echo '<meta http-equiv=REFRESH CONTENT=1;url=fix_datebase2016.php>';
		}	
	
}else{
	
	echo "不能再往前頁...<br/>";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=fix_datebase2016.php>';

}


?>