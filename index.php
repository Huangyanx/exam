<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/Login.css" type="text/css" media="all" rel="stylesheet" />
<title>��¼ҳ��</title>
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/Login.js"></script>
<script type="text/javascript">
 function sent(){
	 document.getElementByIdx_x('myform').submit();//�ύ��
} 
</script>
</head>


<body   ondragstart="return false" draggable="return false"
        ondragenter="return false"  
        ondragover="return false"  
        ondrop="return false"
        onpaste="return false">
<div id="all">
  <div class="top">
    <div class="banner">
      <div class="banner_font">��ӭ��½��Ϣ������ѧʵ���ѧʾ���������Ͽ���ϵͳ</div>
    </div>
    <div class="main">
      <div class="main_left">
        <div class="banner5"><a href="#">
          <div class="banner5_img"><img src="images/kaoshengdenglu.gif"  id="banner5_img" /></div>
          <div class="banner5_font">ѧ����¼</div>
          </a> </div>
        <div class="banner6"><a href="#">
          <div class="banner6_img"><img src="images/jiaoshidenglu.gif"  id="banner6_img" /></div>
          <div class="banner6_font">��ʦ��¼</div>
          </a> </div>
        <div class="zhanshibanner "> <img src="images/zhanshi_banner.gif" id="zhanshibanner"  class="smbanner_img"/>
          <div class="banner1"><a href="maxlogin.php">
            <div class="banner1_img"><img src="images/guessyouliak.gif" id="banner1_img" /></div>
            <div class="banner1_font">�������</div>
            </a> </div>
          <div class="banner2"><a href="apply.php">
            <div class="banner2_img"><img src="images/kaoshengbaoming.gif" id="banner2_img" /></div>
            <div class="banner2_font">��������</div>
            </a> </div>
          <div class="banner3"><a href="#">
            <div class="banner3_img"><img src="images/suibiankankan.gif" id="banner3_img" /></div>
            <div class="banner3_font">��㿴��</div>
            </a> </div>
          <div class="banner4"><a href="usernamelogin.php">
            <div class="banner4_img"><img src="images/minrentang.gif" id="banner4_img" /></div>
            <div class="banner4_font">�û�����</div>
            </a> </div>
        </div>
      </div>
      <div class="main_right">
      
        <div class="denglu">
          <div class="denglu_img"><img src="images/denglubg.gif" id="denglu_img" /></div>
          <div class="denglu_font">ѧ����¼</div>
          
          <div class="form">
            <form action="studentlogin.php" name="myform">
              <ul>
                <li class="li1">
                  <div class="no"><img src="images/no.gif" id="no" /></div>
                  <div class="yes"><img src="images/yes.gif" id="yes" /></div>
                  <div class="span1">׼��֤�ţ�</div>
                  <div class="span2">
                    <input type="text" name="stunumber" value="1111111111" id="input1" onkeyup="this.value=this.value.replace(/\D/g,'')" onblur="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"  maxlength="8" />
                  </div>
                </li>
                <li class="li2">
                  <div class="no1"><img src="images/no.gif" id="no" /></div>
                  <div class="yes1"><img src="images/yes.gif" id="yes" /></div>
                  <div class="span1">������</div>
                  <div class="span2">
                    <input type="text" name="username" value="����"  id="input2"  onblur="value=value.replace(/[^\u4E00-\u9FA5]/g,'')"  onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')"
                           onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\u4E00-\u9FA5]/g,''))"  maxlength="4"   />
                  </div>
                </li>
                <li class="li3">
                 <div class="yanzhengma"></div>
                  <div class="span1">��֤�룺</div>
                  <div class="span2">
                    <input type="text" name="code"  id="input3" onblur="value=value.replace(/[\W]/g,'')" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" maxlength="5"/>
                  </div>
                  <div class="code">
                  <img src="act.php" id="code" alt="�����壬��һ��" style="cursor: pointer; vertical-align:middle;" onclick="this.src='act.php?t='+Math.random()"/>
                                   
				 </div>
                </li>
                <li class="li4">
                 
                   <div class="input4">
                  <!-- <img src="images/denglu.gif" id="input4" />-->
                   <input type="image" src="images/denglu.gif"  id="input4" onkeydown="sent()"/>
                  </div>
                </li>
              </ul>
            </form>
          </div>
          
        </div>
        
    <div class="denglu1">
    
           <div class="denglu_img"><img src="images/denglubg.gif" id="denglu_img" /></div> 
          <div class="denglu_font">��ʦ��¼</div>
          
          <div class="form">
            <form action="teacherlogin.php" name="form">
              <ul>
                <li class="li1">
                  <div class="nos"><img src="images/no.gif" id="no" /></div>
                  <div class="yess"><img src="images/yes.gif" id="yes" /></div>
                  <div class="span1">�û�����</div>
                  <div class="span2">
                    <input type="text" name="username" value="������" id="input1s"onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')"
                    onblur="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\u4E00-\u9FA5]/g,''))"  maxlength="4" />
                  </div>
                </li>
                <li class="li2">
                  <div class="no1s"><img src="images/no.gif" id="no" /></div>
                  <div class="yes1s"><img src="images/yes.gif" id="yes" /></div>
                  <div class="span1">���룺</div>
                  <div class="span2">
                    <input type="text" name="password" value="777777"  id="input2s" onkeyup="value=value.replace(/[^\d]/g,'') " onblur="value=value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"  maxlength="6"   />
                  </div>
                </li>
                <li class="li3">
                 <div class="yanzhengma"></div>
                  <div class="span1s">��֤�룺</div>
                  <div class="span2">
                    <input type="text" name="code"  id="input3s" onblur="value=value.replace(/[\W]/g,'')" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" maxlength="5"/>
                  </div>
                  <div class="code">
                  <img id="code" src="act.php" alt="�����壬��һ�ţ�" style="cursor: pointer; vertical-align:middle;"  onclick="this.src='act.php?t='+Math.random()"/>
					  </div>
                </li>
                <li class="li4">
                 
                  <div class="input4">
                  <!--   <a href="resultmanage.php"><img src="images/denglu.gif" id="input4" /></a>-->
                    <input type="image" src="images/denglu.gif"  id="input4" onkeydown="sent()"/>
                  </div>
                </li>
              </ul>
            </form>
          </div>
          
        </div>    
        
      </div>
    </div>
    
  </div>
  <div class="bottom">
    <div class="design_font">
      ��Ϣ������ѧʵ���ѧʾ��������
    </div>
  </div>
</div>
</body>
</html>
