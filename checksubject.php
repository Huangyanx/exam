
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312." />
<link href="style/CheckSubject.css" type="text/css" media="all" rel="stylesheet" />
<title>查看题目</title>
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
      <div class="banner_font"><strong>网上考试系统后台</strong></div>
    </div>
    <div class="banner_f2"></div>
    <div class="banner_f3"></div>
    <div class="banner_f4"></div>
  </div>
  <div class="main">
    <div class="main_font">教师管理系统</div>
    <div class="clear"></div>
    <div class="box">
      <div class="box_1">
        <div class="box_1_font">查看题目</div>
      </div>
      <div class="box_2">
        <div class="span1">题目：</div>
        <div class="span2"> <?php echo $row["question"];?></div>
        <!--题目放此--> 
      </div>
      <div class="clear"></div>
      <div class="box_3">
        <div class="span1">选项答案：</div>
        <div class="span2"><?php echo $row["A"]."；".$row["B"]."；".$row["C"]."；".$row["D"]."；";?> </div>
        <!--选项答案放此--> 
      </div>
      <div class="clear"></div>
      <div class="box_4">
        <div class="span1">正确答案：</div>
        <div class="span2"> <?php $arr=str_split($row["answer"]);foreach ($arr as $value){echo $row[$value]."；";}?></div>
        <!--正确答案放此--> 
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
