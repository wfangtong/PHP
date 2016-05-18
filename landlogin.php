<?php
header("content-type:text/html;charset=utf-8");
//获取用户提交的用户名和密码

if (isset($_POST["code"])) {
	$code = $_POST["code"];
	session_start();
	if (strtoupper($code) != $_SESSION["code"]) {
		header("location:land.php?error=1");
		return;
	}
}


if (isset($_POST["user"])) {
	$USER = $_POST["user"];
}
if (isset($_POST["password"])) {
	$pwd = $_POST["password"];
}
if (isset($_POST["portal"])) {
	$dl= $_POST["portal"];
}


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
	$sql = "SELECT COUNT(*) FROM admin WHERE `USER`='" . $USER . "' AND `PASSWORD`='" . $pwd . "';";
	$result = mysql_query($sql);
	if (!$result) {
		echo "查询失败";
	} else {
		//查询成功分为两种情况，返回值为0或者1
		$row = mysql_fetch_row($result);
		if ($row[0] > 0) {
			session_start();
			$_SESSION["user"] = $USER;
			header("location:$dl.php");
		} else {
			header("location:land.php?error=2");
		}
	}
}

?>