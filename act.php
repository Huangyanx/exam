<?php
Header("Content-type: image/gif");//��ҳ����gifͼƬ����ʽ�����
/*
* ��ʼ��
*/
$how = 4; //��֤��λ��
$w = $how*20; //ͼƬ���
$h = 24; //ͼƬ�߶�
$alpha = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY"; //��֤������1:��ĸ
$number = "023456789"; //��֤������2:����
$randcode = ""; //��֤���ַ�����ʼ��
srand((double)microtime()*1000000); //��ʼ�����������
$im = ImageCreate($w, $h); //������֤ͼƬ
/*
* ���ƻ������
*/
$bgcolor = ImageColorAllocate($im, 255, 255, 255); //���ñ�����ɫ����ɫ
/* �� image ͼ������� x��y��ͼ�����Ͻ�Ϊ 0, 0����
�� color ��ɫִ��������䣨���� x, y ����ɫ��ͬ�����ڵĵ㶼�ᱻ��䣩�� 
 */
ImageFill($im, 0, 0, $bgcolor); //��䱳��ɫ
/*
* ��λ��������ַ�
*/
for($i=0; $i<$how; $i++)
{ 
	$fontsize =rand(5,60); //�����С
    $alpha_or_number = rand(0, 1); //��ĸ��������
    $str = $alpha_or_number ? $alpha : $number;
    $which = rand(0, strlen($str)-1); //ȡ�ڼ����ַ�
    $code = substr($str, $which, 1); //ȡ�ַ�
    $j = !$i ? 4 : $j+17; //���ַ�λ��
    $color3 = ImageColorAllocate($im, rand(0,100), rand(0,100), rand(0,100)); //ͼ���漴��ɫ
    ImageChar($im, $fontsize, $j, 5, $code, $color3); //���ַ�
    $randcode .= $code; //��λ������֤���ַ���
}

/*
* ��Ӹ���
*/
for($i=0; $i<rand(4,20); $i++)//�汳��������
{   
    $color1 = ImageColorAllocate($im, rand(0,255), rand(0,255), rand(0,255)); //��������ɫ
    ImageArc($im, rand(-5,$w), rand(-5,$h), rand(20,300), rand(20,200), 55, 44, $color1); //������
}   
for($i=0; $i<$how*40; $i++)//�汳�����ŵ�
{   
    $color2 = ImageColorAllocate($im, rand(0,255), rand(0,255), rand(0,255)); //���ŵ���ɫ 
    ImageSetPixel($im, rand(0,$w), rand(0,$h), $color2); //���ŵ�  ��һ����һ����
}
//����֤���ַ���д��session
session_start();
$_SESSION['randcode'] = $randcode;
/*��ͼ����*/
Imagegif($im);
ImageDestroy($im); 
/*��ͼ����*/

?> 
