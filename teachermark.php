
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/TeacherRemark.css" type="text/css" media="all" rel="stylesheet" />
<title>��ʦ����</title>
<script type="text/javascript">
function sent(){
	 document.getElementByIdx_x('myform').submit();//�ύ��
} 
</script>
</head>
<body>
<div id="all">
<form action="teachermarkprocess.php" id="myform">
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
    <div class="fl1">��ѧ������</div>
    <div class="fl2">
      <textarea class="textarea"></textarea>
    </div>
    <div class="fl3">
      <table>
        <tr>
          <td class="td1">������ʦ��</td>
          <td class="td2"><input type="text" id="td2" /></td>
        </tr>
      </table>
    </div>
    <a href="resultmanage.php" class="back"><img src="images/fanhui.gif" id="back" /></a>
     <!--  <a href="ResultManage.html" class="queren"><img src="images/queren.gif" id="queren" /></a>--> 
     <input type="image" src="images/queren.gif" id="queren" onclick="sent()" />
     </div>
   </div>
    <div class="footer"> </div>
    </form>
</div>
</body>
</html>
