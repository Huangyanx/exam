
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style/StudentsMessage.css" type="text/css" media="all" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>考生资料</title>
</head>
<body
ondragstart="return false" draggable="return false"  
        ondragenter="return false"  
        ondragover="return false"  
        ondrop="return false"
        onpaste="return false">
        
        <?php 
        include 'conn.php';
        $id=$_GET["id"];
        $query="select * from mastudent where id='$id'";
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
      <div class="box_font">考生资料</div>
      <div class="clear"></div>
      <div class="box_1">
        <div class="span1">id：</div>
        <div class="span2"><?php echo $id;?></div>
      </div>
      <div class="clear"></div>
      <div class="box_2">
        <div class="span1">姓名：</div>
        <div class="span2"><?php echo $row["username"];?></div>
      </div>
      <div class="clear"></div>
      <div class="box_3">
        <div class="span1">性别：</div>
        <div class="span2"><?php echo $row["sex"];?></div>
      </div>
      <div class="clear"></div>
      <div class="box_4">
        <div class="span1">学号：</div>
        <div class="span2"><?php echo $row["stunumber"];?></div>
      </div>
      <div class="clear"></div>
      <div class="box_5">
        <div class="span1">身份证号：</div>
        <div class="span2"><?php echo $row["myid"];?></div>
      </div>
      <div class="clear"></div>
      <div class="box_6">
        <div class="span1">院系：</div>
        <div class="span2"><?php echo $row["xueyuan"];?></div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="queren">
      <!--<form>
        <input type="image" src="images/queren.gif" id="queren" />
      </form>-->
    </div>
    <div class="fanhui"><a href="studentmanage.php"><img src="images/fanhui.gif" id="fanhui" /></a></div>
  </div>
</div>
</body>
</html>
