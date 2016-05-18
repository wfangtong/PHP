<?php
//创建图片并设置背景颜色
/*$img = imagecreate(200, 200);
imagecolorallocate($img, 240, 246, 36);*/


$rand="";
for ($i=0; $i <4 ; $i++) { 
	$rand.=dechex(rand(1,15));
}
session_start();
$_SESSION["code"]=$rand;
//创建了一张100X100的图片
$img = imagecreatetruecolor(100, 30);
$bg=imagecolorallocate($img,31,79,214); 
//创建文字颜色
$white = imagecolorallocate($img, rand(0,255),rand(0,255),rand(0,255));
//创建干扰线的颜色
$linecolor=imagecolorallocate($img,255,255,255);
//创建干扰线
//imageline($img, 0, 0, 100, 30, $linecolor);
for ($i=0; $i <2 ; $i++) { 
	imageline($img,0,rand(0,30),100,rand(0,30),$linecolor);
}
//创建噪点的颜色
$pointcolor=imagecolorallocate($img,242,233,233);
//创建噪点
for ($i=0; $i < 200; $i++) { 
	imagesetpixel($img, rand(0,100), rand(0,30), $pointcolor);
}

//将文字写到图片上
imagestring($img, 6, rand(0,60), rand(0,15), strtoupper($rand), $white);

//告诉浏览器我要向你发送一张png格式的图片
header("content-type:image/png");
//发送图片
//imagepng($img);
imagepng($img);
$_SESSION["code"] = strtoupper($str);
?>