<?php 
header("content-type:text/html;charset=utf-8");
$id=$_REQUEST["id"];
$name=$_REQUEST["name"];

session_start();

$_SESSION[$id]=$name;
echo "购买成功";

 ?>
 <a href="listsession.php">返回</a>