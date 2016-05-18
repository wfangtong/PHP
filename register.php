<?php 
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
	$sql = "SELECT USER,PASSWORD FROM admin;";
	$result = mysql_query($sql);
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link href="http://cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript">
	function changecode(){
document.getElementById('imgcode').src="checkcode.php?id="+Math.random();

	}
</script>
</head>
<body>
<form action="processregister.php" method="post">
    <div style="position: relative;width: 500px;height: 400px;margin: 0 auto; top: 100px;">
  	<div class="form-group" style="width: 300px;">
    <label for="user">用户名</label>
    <input type="text" class="form-control" id="user" name="USER" placeholder="用户名">
  </div>
	
  	<div class="form-group" style="width: 300px;">
    <label for="password">密码</label>
    <input type="password" class="form-control" id="password" name="PASSWORD" placeholder="密码">
  </div>
	
  	<div class="form-group" style="width: 300px;">
    <label for="name">姓名</label>
    <input type="text" class="form-control" id="name" name="NAME" placeholder="姓名">
  </div>
	
  	<div class="form-group" style="width: 300px;">
    <label for="email">邮箱</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="邮箱">
  </div>
	
  	<div class="form-group" style="width: 300px;">
    <label for="Birthday">出生日期</label>
    <input type="text" class="form-control" id="Birthday" name="Birthday" placeholder="出生日期">
  </div>
	
  	<div class="form-group" style="width: 300px;">
    <label for="Department">地址</label>
    <input type="text" class="form-control" id="Department" name="Department" placeholder="地址">
  </div>
	
  	<div class="form-group" style="width: 300px;">
    <label for="time">时间</label>
    <input type="text" class="form-control" id="time" name="time" placeholder="时间">
  </div>
<div class="form-group" style="width: 300px;">
<label for="code">验证码</label>
    <input type="text" class="form-control" id="code" name="code" placeholder="验证码"><br/>

    <img src="checkcode.php" id="imgcode" onclick="changecode();">
<?php
if (isset($_GET["error"])) {
	if ($_GET["error"]==1) {
		echo "验证码不正确";
	} 
  elseif ($_GET["error"]==2) {
    echo "用户名或密码不正确";
  }
}

?>
	<input type="submit" value="注册"></input>
</div>
</div>
</form>	
</body>
</html>