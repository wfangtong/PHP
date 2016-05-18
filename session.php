readsession:
<?php 
header("content-type:text/html;charset=utf-8");
session_start();
//echo $_SESSION["username"];
/*echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/


//输出用户名
echo $_SESSION["username"];
echo "<br/>";
//输出年龄
echo $_SESSION["age"];
echo "<br/>";
echo $_SESSION["marry"];
echo "<br/>";

//输出数组
foreach ($_SESSION["xueli"] as $key => $value) {
	echo $value.",";
}
 ?>