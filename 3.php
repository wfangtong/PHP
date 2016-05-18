<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>成绩录入</title>
	<link href="http://cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<table class="table table-striped table-bordered table-hover table-condensed">
<tr>
<th>编号</th>
<th>姓名</th>
<th>性别</th>
<th>专业</th>
<th>成绩</th>
<th>录入</th>
<tr/>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "school";

$db = mysql_connect($servername, $username, $password);
if (!$db) {
	echo "连接失败";
}else{

	mysql_select_db($dbname);
	mysql_query("set names 'utf8'");
	$sql="SELECT * FROM teacher";
	$result=mysql_query($sql);
	if ($result==false) {
		echo "查询出错";
	}else{

		while ($row=mysql_fetch_assoc($result)) {
			echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
			echo "<td>" . $row["NAME"] . "</td>";
			echo "<td>" . $row["gender"] . "</td>";
			echo "<td>" . $row["majors"] . "</td>";
            echo "<td>" . $row["score"] . "</td>";
            echo "<td><a href='4.php?id=" . $row["id"] . "'>录入</a></td>";
            echo "<td><a href='41.php?id=" . $row["id"] . "'>删除</a></td>";
			echo "</tr>";
		}
	}
}

?>

</table>

<span style="float: right;"><a href="1.php">返回</a></span>
</body>
</html>