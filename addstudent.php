
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/ChangeMessage.css"  type="text/css" media="all" rel="stylesheet" />
<title>�޸Ŀ�����Ϣ</title>
<script type="text/javascript">
 function sent(){
	 document.getElementByIdx_x('myform').submit();//�ύ��
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
      <div class="banner_font"><strong>���Ͽ���ϵͳ��̨</strong></div>
    </div>
    <div class="banner_f2"></div>
    <div class="banner_f3"></div>
    <div class="banner_f4"></div>
  </div>
  <div class="main">
    <div class="main_font1">��ʦ����ϵͳ</div>
    <div class="clear"></div>
    <div class="box" >
      <form action="addstudentprocess.php">
        <div class="box_font">��ӿ�������</div>
        <div class="clear"></div>
         
        <div class="clear"></div>
        <div class="box_2">
          <div class="span1">������</div>
          <div class="span2">
            <input type="text" class="inputs" name="username" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_3">
          <div class="span1">�Ա�</div>
          <div class="span2">
            <select id="select" name="sex">
              <option value="��">--��--</option>
              <option value="Ů">--Ů--</option>
            </select>
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_4">
          <div class="span1">ѧ�ţ�</div>
          <div class="span2">
            <input type="text" class="inputs" name="stunumber" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_5">
          <div class="span1">���֤�ţ�</div>
          <div class="span2">
            <input type="text" class="inputs" name="ID" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_6">
          <div class="span1">Ժϵ��</div>
          <div class="span2">
            <input type="text" class="inputs" name="xueyuan"/>
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_6">
          <div class="span1">�༶��</div>
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
