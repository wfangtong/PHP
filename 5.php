<?php
header("content-type:text/html;charset=utf-8");
//在编辑页面，首先根据传递的博客编号查询博客信息，然后将这些信息显示到页面上，供用户修改
$id = $_POST["id"];

$score = $_POST["score"];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "school";
//mysql_connect("localhost", "root", "198412");
//连接成功，返回连接，失败，返回false
$db = mysql_connect($servername, $username, $password);
if (!$db) {
	echo "连接失败";
} else {
	mysql_select_db($dbname);
	mysql_query("set names 'utf8'");
	$sql = "UPDATE teacher SET score='".$score."' WHERE id=".$id;
	$result = mysql_query($sql);
	if ($result) {
		//echo "更改成功";
		header("location:3.php");
	} else {
		echo "更改失败";
	}
}
mysql_close($db);
?>