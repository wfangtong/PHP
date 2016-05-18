<?php
header("content-type:text/html;charset=utf-8");
session_start();
/*echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/

echo "<table border=1>";
echo "<tr><td>商品编号</td><td>商品名称</td></tr>";
foreach ($_SESSION as $key => $value) {
	echo "<tr>";
	echo "<td>";
	echo $key;
	echo "</td>";
	echo "<td>";
	echo $value;
	echo "</td>";
	echo "</tr>";
}

echo "</table>";

?>
