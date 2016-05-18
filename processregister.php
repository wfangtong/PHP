<?php
header("content-type:text/html;charset=utf-8");


if (isset($_POST["code"])) {
	$code = $_POST["code"];
	session_start();
	if (strtoupper($code) != $_SESSION["code"]) {
		header("location:register.php?error=1");
	return;
	}
}
//获取用户提交的用户名和密码
$Id = $_POST["Id"];
$USER = $_POST["USER"];
$PASSWORD = $_POST["PASSWORD"];
$NAME = $_POST["NAME"];
$email = $_POST["email"];
$Birthday = $_POST["Birthday"];
$Department = $_POST["Department"];
$time = $_POST["time"];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "blog";

$db = mysql_connect($servername, $username, $password);
if (!$db) {
	echo "连接失败";
} else {
	mysql_select_db($dbname);
	mysql_query("set names 'utf8'");
	$sql = "INSERT INTO admin VALUES('".$Id."','". $USER . "','" . $PASSWORD . "','" . $NAME . "','" . $email . "','" . $Birthday . "','" . $Department . "','" . $time . "')";
	$result = mysql_query($sql);
	if (!$result) {
		echo "注册失败";
	}else{

	header("location:land.php");
	}
}
	mysql_close($db);
?>