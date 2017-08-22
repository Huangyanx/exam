
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/ChangeMessage.css"  type="text/css" media="all" rel="stylesheet" />
<title>修改考生信息</title>
<script type="text/javascript">
 function sent(){
	 document.getElementByIdx_x('myform').submit();//提交表单
} 
</script>
</head>
<body
ondragstart="return false" draggable="return false"  
        ondragenter="return false"  
        ondragover="return false"  
        ondrop="return false"
        onpaste="return false" >
        <?php 
        include 'conn.php';
        session_start();
        if (isset($_SESSION["id"])) {
        	$id=$_SESSION["id"];
        }
        else {
			$id=$_GET["id"];
			$_SESSION["id"]=$id;
        }
        $query="select * from mastudent where id ='$id'";
        $result=mysql_query($query);
        $row=mysql_fetch_array($result);
        
        if (isset($_SESSION["destination"])){
        	$destination=$_SESSION["destination"];
        }else {
			$destination=$row["photo"];
			$_SESSION["destination"]=$destination;
		}
       
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
    <div class="main_font1">教师管理系统</div>
    <div class="clear"></div>
    <div class="box" style="position:relative">
      <div class="show_img" ><img src="<?php echo $destination;?>" width="123px" height="148px" /></div>
      <form enctype="multipart/form-data" method="post" action="upphotoing.php">
      <div class="show_input" style="position:absolute;  top:230px; left:455px;">
      <input type="file" id="show_input" style="width:70px" name="upfile" />
      <br></br><input style="width:70px" type="submit" name="submit1" id="submit1" value="提交" /></div>
      <div class="show_submit" style="position: aboslute; top:330px; left:455px;">
      </div>
      </form>
      <form action="changeprocess.php" method="post" name="myform">
        <div class="box_font">修改考生资料</div>
        <div class="clear"></div>
        <div class="box_1">
          
        </div>
        <div class="clear"></div>
        <div class="box_2">
          <div class="span1">姓名：</div>
          <div class="span2">
            <input type="text" name="username" class="inputs" value="<?php echo $row['username'];?> "/>
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_3">
          <div class="span1">性别：</div>
          <div class="span2">
            <select id="select" name="sex">
              <option id="sex" value="男" <?php if ($row["sex"]=="男"){?>selected="selected"<?php }?>>--男--</option>
              <option id="sex" value="女" <?php if ($row["sex"]=="女"){?>selected="selected"<?php }?>>--女--</option>
            </select>
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_4">
          <div class="span1">学号：</div>
          <div class="span2">
            <input type="text" name="stunumber" class="inputs" value="<?php echo $row['stunumber'];?>" onkeyup="this.value=this.value.replace(/\D/g,'')" onblur="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_5">
          <div class="span1">身份证号：</div>
          <div class="span2">
            <input type="text" name="ID" class="inputs" value="<?php echo $row['myid'];?>" onkeyup="this.value=this.value.replace(/\D/g,'')" onblur="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_6">
          <div class="span1">院系：</div>
          <div class="span2">
            <input type="text" name="xueyuan" class="inputs" value="<?php echo $row['xueyuan'];?>" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_6">
          <div class="span1">班级：</div>
          <div class="span2">
            <input type="text" name="major" class="inputs" value="<?php echo $row['major'];?>" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="queren1">
         <!-- <a href="#"><img src="images/queren.gif" id="queren1" /></a>-->
          <input type="image" src="images/queren.gif" id="queren" onkeydown="sent()" />
        </div>
         <div class="fanhui1"><a href="back.php"><img src="images/fanhui.gif" id="fanhui1" /></a></div>
      </form>
    </div>
  </div>
  <div class="footer"> </div>
</div>
</body>
</html>
