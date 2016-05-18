<?php
session_start();

//清除session中的内容
$_SESSION = array();
//清除浏览器中保存的sessionid
if (isset($_COOKIE[session_name()])) {
	setcookie(session_name(), "", time() - 1);
}
//销毁session
session_destroy();
header("location:land.php");

?>