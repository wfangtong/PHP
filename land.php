<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link href="http://cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript">
	function changecode(){
document.getElementById('imgcode').src="checkcode.php?id="+Math.random();

	}

/*function login() {
    var portals = document.getElementsByName("portal");
    for(var i = 0; i < portals.length; i++) {
        if(portals[i].checked) {
            if(portals[i].value === "teacher") {
                location.href = "1.php";
            }
            else if(portals[i].value === "student") {
                location.href = "6.php";
            }
        }
    }
}
*/
</script>
</head>
<body>
	<form action="landlogin.php" method="post">
	<div style="position: relative;width: 500px;height: 400px;margin: 0 auto; top: 100px;">

  	<div class="form-group" style="width: 300px;">
    <label for="user">用户名</label>
    <input type="text" class="form-control" id="user" name="user" placeholder="用户名">
  </div>
  <div class="form-group" style="width: 300px;">
    <label for="password">密码</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="密码">
  </div>
  <div class="form-group" style="width: 300px;">
    <label for="code">验证码</label>
    <input type="text" class="form-control" id="code" name="code" placeholder="验证码">

    <img src="checkcode.php" id="imgcode" onclick="changecode();">
        <?php
if (isset($_GET["error"])) {
	if ($_GET["error"]==1) {
		echo "验证码不正确";
	} elseif ($_GET["error"]==2) {
		echo "用户名或密码不正确";
	}
}

?>
  </div>
<input type="radio" value="1" name="portal" >教师</input>
<input type="radio" value="6" name="portal">学生</input><br/>
  <input type="submit" class="btn btn-default" value="登陆"></input>
  <a href="register.php">注册</a>
  </div>
</form>
</body>
</html>