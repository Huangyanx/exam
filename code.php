<?php
session_start();
//������֤��ͼƬ
header("Content-type: image/png");
// ȫ����
$str = "1,2,3,4,5,6,7,8,9,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,x,w,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";      //Ҫ��ʾ���ַ������Լ�������ɾ
$list = explode(",", $str);
$cmax = count($list) - 1;
$verifyCode = '';
for ( $i=0; $i < 5; $i++ ){
      $randnum = mt_rand(0, $cmax);
      $verifyCode .="". $list[$randnum];           //ȡ���ַ�����ϳ�Ϊ����Ҫ����֤���ַ�

}
$_SESSION['verifyCode'] =$verifyCode;        //���ַ�����SESSION��
  
$im = imagecreate(70,22);    //����ͼƬ
$white = imagecolorallocate($im, 255,255,255);
$color=imagecolorallocate($im,rand(0, 100),rand(0, 100),rand(0, 100));
imagefill($im,0,0,$white);     //��ͼƬ�����ɫ
  
//����֤�����ͼƬ
imagestring($im, rand(3, 8), 10, 6, $verifyCode, $color);    //����֤��д�뵽ͼƬ��
  
for($i=0;$i<rand(2, 5);$i++)  //�����������
{
	$color2=imagecolorallocate($im, rand(0, 255),rand(0, 255),rand(0, 255));
	$color3=imagecolorallocate($im, rand(0, 255),rand(0, 255),rand(0, 255));
	for ($j=0;$j<rand(10, 30);$j++){
		$color1=imagecolorallocate($im, rand(0, 255),rand(0, 255),rand(0, 255));
     imagesetpixel($im, rand(1,57) , rand(1,27) , $color1);    //�����״������
	}
     imagearc($im, rand(-5,57), rand(-5,27), rand(0, 57), rand(0, 57), 57, 27, $color2);    //���뻡��״������
     imageline($im, rand(0,255), rand(0,255), rand(0,255), rand(0,255), $color3);    //��������״������
}
imagepng($im);
imagedestroy($im);
?>