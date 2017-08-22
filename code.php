<?php
session_start();
//生成验证码图片
header("Content-type: image/png");
// 全数字
$str = "1,2,3,4,5,6,7,8,9,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,x,w,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";      //要显示的字符，可自己进行增删
$list = explode(",", $str);
$cmax = count($list) - 1;
$verifyCode = '';
for ( $i=0; $i < 5; $i++ ){
      $randnum = mt_rand(0, $cmax);
      $verifyCode .="". $list[$randnum];           //取出字符，组合成为我们要的验证码字符

}
$_SESSION['verifyCode'] =$verifyCode;        //将字符放入SESSION中
  
$im = imagecreate(70,22);    //生成图片
$white = imagecolorallocate($im, 255,255,255);
$color=imagecolorallocate($im,rand(0, 100),rand(0, 100),rand(0, 100));
imagefill($im,0,0,$white);     //给图片填充颜色
  
//将验证码绘入图片
imagestring($im, rand(3, 8), 10, 6, $verifyCode, $color);    //将验证码写入到图片中
  
for($i=0;$i<rand(2, 5);$i++)  //加入干扰象素
{
	$color2=imagecolorallocate($im, rand(0, 255),rand(0, 255),rand(0, 255));
	$color3=imagecolorallocate($im, rand(0, 255),rand(0, 255),rand(0, 255));
	for ($j=0;$j<rand(10, 30);$j++){
		$color1=imagecolorallocate($im, rand(0, 255),rand(0, 255),rand(0, 255));
     imagesetpixel($im, rand(1,57) , rand(1,27) , $color1);    //加入点状干扰素
	}
     imagearc($im, rand(-5,57), rand(-5,27), rand(0, 57), rand(0, 57), 57, 27, $color2);    //加入弧线状干扰素
     imageline($im, rand(0,255), rand(0,255), rand(0,255), rand(0,255), $color3);    //加入线条状干扰素
}
imagepng($im);
imagedestroy($im);
?>