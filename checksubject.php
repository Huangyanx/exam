
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312." />
<link href="style/CheckSubject.css" type="text/css" media="all" rel="stylesheet" />
<title>�鿴��Ŀ</title>
</head>

<body>
<?php 
include 'conn.php';

$id=$_GET["id"];
$query="select * from exam where id='$id'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);

?>
<div id="all">
  <div class="banner">
    <div class="banner_f1">
      <div class="banner_font"><strong>���Ͽ���ϵͳ��̨</strong></div>
    </div>
    <div class="banner_f2"></div>
    <div class="banner_f3"></div>
    <div class="banner_f4"></div>
  </div>
  <div class="main">
    <div class="main_font">��ʦ����ϵͳ</div>
    <div class="clear"></div>
    <div class="box">
      <div class="box_1">
        <div class="box_1_font">�鿴��Ŀ</div>
      </div>
      <div class="box_2">
        <div class="span1">��Ŀ��</div>
        <div class="span2"> <?php echo $row["question"];?></div>
        <!--��Ŀ�Ŵ�--> 
      </div>
      <div class="clear"></div>
      <div class="box_3">
        <div class="span1">ѡ��𰸣�</div>
        <div class="span2"><?php echo $row["A"]."��".$row["B"]."��".$row["C"]."��".$row["D"]."��";?> </div>
        <!--ѡ��𰸷Ŵ�--> 
      </div>
      <div class="clear"></div>
      <div class="box_4">
        <div class="span1">��ȷ�𰸣�</div>
        <div class="span2"> <?php $arr=str_split($row["answer"]);foreach ($arr as $value){echo $row[$value]."��";}?></div>
        <!--��ȷ�𰸷Ŵ�--> 
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="footer">
    <div class="fanhui"><a href="question.php"><img src="images/fanhui.gif" id="fanhui" /></a></div>
  </div>
</div>
</body>
</html>
