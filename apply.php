
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/Apply.css" type="text/css" media="all" rel="stylesheet" />
<title>����ҳ��</title>
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/Apply.js"></script>
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
<!--��ֹ���������������Ƶȵ� -->
        <?php 
        session_start();
        if (isset($_SESSION["destination"])){
			$destination=$_SESSION["destination"];
			}
        ?>
<div id="all">
  <div class="banner">
    <div class="banner_img"><img src="images/zhanshi_banner.gif" id="banner_img" /></div>
    <div class="banner_font">���Ͽ���ϵͳ����</div>
  </div>
  <div class="main">
    <div class="main_left">
      <div class="ml_f1">
        <div class="ml_f1_banner1"><img src="images/003.gif" id="ml_f1_banner1" /></div>
        <div class="ml_f1_banner2"><img src="images/004.gif" id="ml_f1_banner2" /></div>
        <div class="ml_f1_font">
          <div class="ml_f1_font1">��λ������</div>
          <div class="clear"></div>
          <div class="ml_f1_font2">�˴����Ͽ��ԣ�������׼��֤����ѧ�ţ�׼��֤������ʦͳһ��ӡ������λ�������ؿ��Թ���</div>
          <div class="clear"></div>
          <div class="ml_f1_font3">����ʱ�䣺7��12�ŵ�8��15��</div>
        </div>
      </div>
      <div class="ml_f2">
        <div class="hr1"></div>
        <div class="hr2"></div>
        <div class="ml_f2_img"><img src="images/007.gif" id="ml_f2_img" /></div>
      </div>
    </div>
    <div class="main_right">
    	<form enctype="multipart/form-data" action="upphoto.php" method="post" id="myform">
      <div class="box">
        <div class="box_f1">��������</div>
        <div class="box_f2">
          <div class="box_f2_left">
            <div class="box_f2_left1">
              <div class="line_left">������</div>
              <div class="line_right">
                <input type="text" id="input1" name="username" maxlength="4" />
              </div>
            </div>
            <div class="box_f2_left2">
              <div class="line_left">�Ա�</div>
              <div class="line_right"> <span class="span1">
                <input type="radio" class="input2" name="sex" />
                </span> <span class="span2">��</span> <span class="span3">
                <input type="radio" class="input3" name="sex" />
                </span> <span class="span4">Ů</span> </div>
            </div>
          </div>
          <div id="preview"> 
          <?php 
          if (isset($_SESSION["destination"])){
			echo "<img src=\"".$destination."\" width=123"
			." height=148";
			unset($_SESSION["destination"]);
			}
          ?>
          
          </div>
        </div>
        <div class="box_f3">
          <div class="box_f3_1">
            <div class="line_left">Ժϵ��</div>
            <div class="line_right">
              <select id="s1" name="xueyuan" >
                <option value="��ѡ��">--��ѡ��--</option>
                <option class="sss" value="����Ժ" >����Ժ</option>
                <option class="sss"  value="����Ժ" >����Ժ</option>
                <option class="sss"  value="��ѧԺ" >��ѧԺ</option>
              </select>
            </div>
          </div>
          <div class="box_f3_2">
            <div class="line_left">�༶��</div>
            <div class="line_right">
              
              
              
              <select  id="s2" class="sele">
        <option >--��ѡ��--</option>
      </select>
      <select id="s3" class="sele" style="display:none" name="banji">
        <option value="��ѡ��">--��ѡ��--</option>
        <option>�ż�</option>
        <option>ͳ��</option>
        <option>����</option>
      </select>
      <select id="s4" class="sele" style="display:none"name="banji">
        <option value="��ѡ��">--��ѡ��--</option>
        <option>���</option>
        <option>԰��</option>
        <option>����</option>
      </select>
      <select id="s5" class="sele" name="banji" style="display:none">
        <option value="��ѡ��">--��ѡ��--</option>
        <option>����</option>
        <option>���</option>
        <option>��ҩ</option>
      </select>
            </div>
          </div>
          <div class="box_f3_4">
            <input type="file" onchange="previewImage(this)" id="input9" name="upfile" value="Ԥ��" />
          </div>
          <div class="box_f3_5">
          	<input type="submit" value="�ϴ���Ƭ" name="submit1" id="submit1"/>
          </div>
        </div>
        <div class="box_f4">
          <div class="box_f4_1">
            <div class="line_left">ѧ�ţ�</div>
            <div class="line_right">
              <input type="text" id="input10" maxlength="10" name="studentnum"  />
            </div>
          </div>
          <div class="box_f4_2">
            <div class="line_left1">���֤�ţ�</div>
            <div class="line_right">
              <input type="text" id="input11" maxlength="18" name="ID" />
            </div>
          </div>
        </div>
        <div class="box_f5">
          <div class="queren">
            <input type="image" src="images/queren.gif" id="queren" onclick="sent()" />
           <!-- <input type="submit" name="submit2" id="submit2" style="background:url(images/queren.gif)" value=""/> -->  
          </div>
          <div class="fanhui"><a href="back.php"><img src="images/fanhui.gif" id="fanhui" /></a></div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
