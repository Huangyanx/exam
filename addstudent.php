
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
    <div class="box" >
      <form action="addstudentprocess.php">
        <div class="box_font">添加考生资料</div>
        <div class="clear"></div>
         
        <div class="clear"></div>
        <div class="box_2">
          <div class="span1">姓名：</div>
          <div class="span2">
            <input type="text" class="inputs" name="username" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_3">
          <div class="span1">性别：</div>
          <div class="span2">
            <select id="select" name="sex">
              <option value="男">--男--</option>
              <option value="女">--女--</option>
            </select>
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_4">
          <div class="span1">学号：</div>
          <div class="span2">
            <input type="text" class="inputs" name="stunumber" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_5">
          <div class="span1">身份证号：</div>
          <div class="span2">
            <input type="text" class="inputs" name="ID" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_6">
          <div class="span1">院系：</div>
          <div class="span2">
            <input type="text" class="inputs" name="xueyuan"/>
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_6">
          <div class="span1">班级：</div>
          <div class="span2">
            <input type="text" class="inputs" name="major" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="queren1" >
         <!--  <a href="#"><img src="images/queren.gif" id="queren1" /></a>-->
          <input type="image" src="images/queren.gif" id="queren" onclick="sent()"/>
        </div>
        <div class="fanhui1"><a href="studentmanage.php"><img src="images/fanhui.gif" id="fanhui1" /></a></div>
      </form>
    </div>
  </div>
  <div class="footer"> </div>
</div>
</body>
</html>
