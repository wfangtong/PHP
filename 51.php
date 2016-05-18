<?php
header("content-type:text/html;charset=utf-8");
$NAME = $_POST["name"];
$gender = $_POST["gender"];
$majors = $_POST["majors"];
$score = $_POST["score"];

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
	$sql = "INSERT INTO teacher(NAME,gender,majors,score) VALUES('" . $NAME . "','" . $gender . "','" . $majors . "','" . $score . "')"; 
	$result = mysql_query($sql);
	if (!$result) {
		echo "添加失败";
	} else {
		header("location:3.php");
	}
}
mysql_close($db);
?>