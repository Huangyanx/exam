
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
      <div class="banner_font"><strong>���Ͽ���ϵͳ��̨</strong></div>
    </div>
    <div class="banner_f2"></div>
    <div class="banner_f3"></div>
    <div class="banner_f4"></div>
  </div>
  <div class="main">
    <div class="main_font1">��ʦ����ϵͳ</div>
    <div class="clear"></div>
    <div class="box" style="position:relative">
      <div class="show_img" ><img src="<?php echo $destination;?>" width="123px" height="148px" /></div>
      <form enctype="multipart/form-data" method="post" action="upphotoing.php">
      <div class="show_input" style="position:absolute;  top:230px; left:455px;">
      <input type="file" id="show_input" style="width:70px" name="upfile" />
      <br></br><input style="width:70px" type="submit" name="submit1" id="submit1" value="�ύ" /></div>
      <div class="show_submit" style="position: aboslute; top:330px; left:455px;">
      </div>
      </form>
      <form action="changeprocess.php" method="post" name="myform">
        <div class="box_font">�޸Ŀ�������</div>
        <div class="clear"></div>
        <div class="box_1">
          
        </div>
        <div class="clear"></div>
        <div class="box_2">
          <div class="span1">������</div>
          <div class="span2">
            <input type="text" name="username" class="inputs" value="<?php echo $row['username'];?> "/>
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_3">
          <div class="span1">�Ա�</div>
          <div class="span2">
            <select id="select" name="sex">
              <option id="sex" value="��" <?php if ($row["sex"]=="��"){?>selected="selected"<?php }?>>--��--</option>
              <option id="sex" value="Ů" <?php if ($row["sex"]=="Ů"){?>selected="selected"<?php }?>>--Ů--</option>
            </select>
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_4">
          <div class="span1">ѧ�ţ�</div>
          <div class="span2">
            <input type="text" name="stunumber" class="inputs" value="<?php echo $row['stunumber'];?>" onkeyup="this.value=this.value.replace(/\D/g,'')" onblur="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_5">
          <div class="span1">���֤�ţ�</div>
          <div class="span2">
            <input type="text" name="ID" class="inputs" value="<?php echo $row['myid'];?>" onkeyup="this.value=this.value.replace(/\D/g,'')" onblur="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_6">
          <div class="span1">Ժϵ��</div>
          <div class="span2">
            <input type="text" name="xueyuan" class="inputs" value="<?php echo $row['xueyuan'];?>" />
          </div>
        </div>
        <div class="clear"></div>
        <div class="box_6">
          <div class="span1">�༶��</div>
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
