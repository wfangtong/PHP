<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "school";

$db = mysql_connect($servername, $username, $password);
if (!$db) {
	echo "连接失败";
} else {
	mysql_select_db($dbname);
	mysql_query("set names 'utf8'");
	$sql = "SELECT * FROM majors";
	$result = mysql_query($sql);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>添加信息</title>
</head>
<body>
<form action="processadd.php" method="post">


姓名:<input type="text" name="NAME"></input><br/>
性别:<input type="text" name="gender"></input><br/>
出生日期:<input  type="text" name="birthday" class="sang_Calender"></input><br/>
专业名称:<select name="major">
<?php
while ($row = mysql_fetch_assoc($result)) {
	echo "<option value=" . $row["id"] . ">";
	echo $row["major_name"];
	echo "</option>";
}
mysql_free_result($result);
mysql_close($db);
?>
	</select>

<input type="submit" value="添加"></input>

</form>
</body>
</html>
<script type="text/javascript" src="datetime.js"></script>