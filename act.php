<?php
Header("Content-type: image/gif");//网页就是gif图片的形式输出的
/*
* 初始化
*/
$how = 4; //验证码位数
$w = $how*20; //图片宽度
$h = 24; //图片高度
$alpha = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY"; //验证码内容1:字母
$number = "023456789"; //验证码内容2:数字
$randcode = ""; //验证码字符串初始化
srand((double)microtime()*1000000); //初始化随机数种子
$im = ImageCreate($w, $h); //创建验证图片
/*
* 绘制基本框架
*/
$bgcolor = ImageColorAllocate($im, 255, 255, 255); //设置背景颜色：白色
/* 在 image 图像的坐标 x，y（图像左上角为 0, 0）处
用 color 颜色执行区域填充（即与 x, y 点颜色相同且相邻的点都会被填充）。 
 */
ImageFill($im, 0, 0, $bgcolor); //填充背景色
/*
* 逐位产生随机字符
*/
for($i=0; $i<$how; $i++)
{ 
	$fontsize =rand(5,60); //字体大小
    $alpha_or_number = rand(0, 1); //字母还是数字
    $str = $alpha_or_number ? $alpha : $number;
    $which = rand(0, strlen($str)-1); //取第几个字符
    $code = substr($str, $which, 1); //取字符
    $j = !$i ? 4 : $j+17; //绘字符位置
    $color3 = ImageColorAllocate($im, rand(0,100), rand(0,100), rand(0,100)); //图内随即颜色
    ImageChar($im, $fontsize, $j, 5, $code, $color3); //绘字符
    $randcode .= $code; //逐位加入验证码字符串
}

/*
* 添加干扰
*/
for($i=0; $i<rand(4,20); $i++)//绘背景干扰线
{   
    $color1 = ImageColorAllocate($im, rand(0,255), rand(0,255), rand(0,255)); //干扰线颜色
    ImageArc($im, rand(-5,$w), rand(-5,$h), rand(20,300), rand(20,200), 55, 44, $color1); //干扰线
}   
for($i=0; $i<$how*40; $i++)//绘背景干扰点
{   
    $color2 = ImageColorAllocate($im, rand(0,255), rand(0,255), rand(0,255)); //干扰点颜色 
    ImageSetPixel($im, rand(0,$w), rand(0,$h), $color2); //干扰点  画一个单一像素
}
//把验证码字符串写入session
session_start();
$_SESSION['randcode'] = $randcode;
/*绘图结束*/
Imagegif($im);
ImageDestroy($im); 
/*绘图结束*/

?> 
