
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/index.css" type="text/css" media="all" rel="stylesheet" />
<style type="text/css">
upexam{
	width:250px;
	height:50px;
	position:fixed;
	right:0px;
	float:right;
	
}
input{
	background-color:ABC9E8;
}
</style>

<title>������</title>
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/index.js"></script>
<script type="text/javascript">
function upexam(){
  	
	var r=confirm("ȷ������")
	  if (r==true)
		  {
		  alert("����ɹ���")
		  document.form.submit();
	  }
	  else
	    {
	   return false
	    }
  				
}


</script> 
</script>
</head>
<style></style>
<body
ondragstart="return false" draggable="return false"  
        ondragenter="return false"  
        ondragover="return false"  
        ondrop="return false"
        onpaste="return false"> 
        <?php 
        include 'conn.php';
        session_start();
        $username=$_SESSION["username"];
        
        ?>

<div id="all">
  <div class="banner">
  <script type="text/javascript" >
    $(document).ready(function(e) {
		var i = 0;
        $('.start').click(function(e) {
			var w =screen.availWidth;
			var h = screen.availHeight
			 
            window.open("Exam.php",""," height = " + h + " width = " + w + "");
		   
			
        });
	 
    });
  </script>
    <div class="start"><a href="#"><img src="images/start.gif" id="start" /></a></div>
    <div class="banner_left">
      <div class="banner_left_img"><img src="images/zhanshi_banner.gif" id="banner_left_img" /></div>
    </div>
    <div class="banner_middle">
      <div class="banner_middle_font1">��ѧ�������������ϵͳ</div>
      <div class="banner_middle_font2"><span class="span1"><?php echo $username?></span><span class="span2">ͬѧ����ӭ����뿼��ϵͳ</span></div>
    </div>
    <div class="banner_right"></div>
  </div>
  <div class="main">
    <div class="main_left">
      <div class="ul">
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/1.gif" id="img1" /></div>
            <div class="floor_font">ģ�⿼��</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/2.gif" id="img2" /></div>
            <div class="floor_font">��������</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/3.gif" id="img3" /></div>
            <div class="floor_font">ϰ����ϰ</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/4.gif" id="img4" /></div>
            <div class="floor_font">��������</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/5.gif" id="img5" /></div>
            <div class="floor_font">�ɼ���ѯ</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/6.gif" id="img6" /></div>
            <div class="floor_font">��������</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/7.gif" id="img7" /></div>
            <div class="floor_font">��ʦ����</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
      </div>
    </div>
    <div class="main_right"> 
      <!--ģ�⿼��-->
      <div class="cherix">
      <form action="simulatedexam.php" name="form">
         <div class="cherix_item">��ѡ��</div>
          
          <?php
		include 'conn.php';
		require 'comm.php';
			$se_pos=range(1, 19);//���ݿ���19����ѡ��
			$num=6;
			shuffle($se_pos);//�����ֳɵ�����������к���
			for ($i=0;$i<$num;$i++){
			$qest=mysql_query("select * from exam where id ='$se_pos[$i]'");
			$myrow_qest=mysql_fetch_array($qest);
			$xu=$i+1;
			 echo $xu."��";
			echo $myrow_qest["question"].'<br>';
			
			$arry = array('A','B','C','D');
			$ar=array(1=>'A',2=>'B',3=>'C',4=>'D');
			shuffle($arry);
			echo "<br>";
			echo "&nbsp;&nbsp;";
			$k=1;?>
			<input type='hidden' name=<?php echo 'si'.$i;?> value=<?php echo $se_pos[$i];?> />
			<?php 
			{if (!($k>0&&$k<5)) $k=1;}
				foreach ($arry as $value) {
					?>
					<input type='radio' name=<?php echo 'answer'.$i;?> value=<?php echo $value;?> />
					<?php echo $ar[$k]."��".$myrow_qest["$value"]; ?>&nbsp;&nbsp;
					<?php if ($k==2) echo "<br><br>"; ?>&nbsp;&nbsp;
					<?php $k++; 
				}echo '<br></br>';
				
			} 
				?>
		          		
         <div class="cherix_item">��ѡ��</div>
         
         <?php 
		$mulitiple=range(20, 31);
		$num=5;
		shuffle($mulitiple);
		for ($i=0;$i<$num;$i++){
		$query="select * from exam where id='$mulitiple[$i]' ";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		$xu=$i+1;
		echo $xu."��";
		echo $row["question"].'<br>';
		$arry = array('A','B','C','D');
		$ar=array(1=>'A',2=>'B',3=>'C',4=>'D');
		shuffle($arry);
		$k=1;?>
		<input type='hidden' name=<?php echo 'muli'.$i;?> value=<?php echo $mulitiple[$i];?> />
		<?php {if (!($k>0&&$k<5)) $k=1;}
		foreach ($arry as $value) {
			echo "<br>";
		echo "&nbsp;&nbsp;";
			?>
				<input type="checkbox" name=<?php echo $i.'ans[]';?> value=<?php echo $value;?> />
				<?php echo $ar[$k]."��".$row["$value"]; ?><br></br>
				<?php $k++; 
			}
				
		}
		
		?>
		<div class="upexam"><input type="submit" value="�ύ�Ծ�" onmousedown="upexam()"/></div>
		</form>
         
      </div>
      <!--��������-->
      <div class="cherix">
        <div class="cherix_item">��ѡ��</div>
        <table class="cherix_table">
          <tr class="first_tr">
            <td>&nbsp;1.�л����񹲺͹���������һ�ꣿ</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj1q"/>
              &nbsp;&nbsp;1946��</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj1q" />
              &nbsp;&nbsp;1947��</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj1q" />
              &nbsp;&nbsp;1948��</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj1q" />
              &nbsp;&nbsp;1949��</td>
          </tr>
        </table>
        <table class="cherix_table">
          <tr class="first_tr">
            <td>&nbsp;1.�л����񹲺͹���������һ�ꣿ</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj2q"/>
              &nbsp;&nbsp;1946��</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj2q" />
              &nbsp;&nbsp;1947��</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj2q" />
              &nbsp;&nbsp;1948��</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj2q" />
              &nbsp;&nbsp;1949��</td>
          </tr>
        </table>
        <table class="cherix_table">
          <tr class="first_tr">
            <td>&nbsp;1.�л����񹲺͹���������һ�ꣿ</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj3q"/>
              &nbsp;&nbsp;1946��</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj3q" />
              &nbsp;&nbsp;1947��</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj3q" />
              &nbsp;&nbsp;1948��</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj3q" />
              &nbsp;&nbsp;1949��</td>
          </tr>
        </table>
        <div class="cherix_item">��ѡ��</div>
        <table class="cherix_table">
          <tr class="first_tr">
            <td>&nbsp;1.����ϲ����������˭��</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="checkbox"/>
              &nbsp;&nbsp;������</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="checkbox"/>
              &nbsp;&nbsp;�ܽ���</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="checkbox"/>
              &nbsp;&nbsp;����</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="checkbox"/>
              &nbsp;&nbsp;������</td>
          </tr>
        </table>
      </div>
      <!--ϰ����ϰ-->
      <div class="cherix">
        <div class="cherix_item">��ѡ��</div>
        
        <?php
		include 'conn.php';
			$num=19;
			for ($i=1;$i<=$num;$i++){
			$qest=mysql_query("select * from exam where id ='$i'");
			$myrow_qest=mysql_fetch_array($qest);
			 echo $i."��";
			echo $myrow_qest["question"].'<br>';
			
			$arry = array('A','B','C','D');
			echo "<br>";
			echo "&nbsp;&nbsp;";
			$k=0;?>
			<input type='hidden' name=<?php echo 'si'.$i;?> value=<?php echo $i;?> />
			<?php 
			{if (!($k>=0&&$k<5)) $k=0;}
				foreach ($arry as $value) {
					?>
					<input type='radio' name=<?php echo 'answer'.$i;?> value=<?php echo $value;?> />
					<?php echo $arry["$k"]."��".$myrow_qest["$value"]; ?>&nbsp;&nbsp;
					<?php if ($k==1) echo "<br><br>"; ?>&nbsp;&nbsp;
					<?php $k++; 
				}echo '<br></br>';
				
			} 
				?>
		          		
         <div class="cherix_item">��ѡ��</div>
         
         <?php 
		
		
		for ($i=20;$i<=31;$i++){
		$query="select * from exam where id='$i' ";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		
		echo $i."��";
		echo $row["question"].'<br>';
		$arry = array('A','B','C','D');
		$k=0;?>
		<input type='hidden' name=<?php echo 'muli'.$i;?> value=<?php echo $i;?> />
		<?php {if (!($k>=0&&$k<5)) $k=0;}
		foreach ($arry as $value) {
			echo "<br>";
		echo "&nbsp;&nbsp;";
			?>
				<input type="checkbox" name=<?php echo $i.'ans[]';?> value=<?php echo $value;?> />
				<?php echo $arry["$k"]."��".$row["$value"]; ?><br></br>
				<?php $k++; 
			}
				
		}
		
		?>
      </div>
      <!--��������-->
      <div class="cherix" style="position:relative">
      <?php $query="select * from mastudent where username='$username'";
        	$result=mysql_query($query);
        	$row=mysql_fetch_array($result);
        ?>
        <div class="touxiang"><img src="<?php echo $row['photo'];?>" height="146px" width="123px"/></div>
        <div class="cherix_item">��������</div>
        <table class="kszl_table">
          <tr>
            <td class="kszl_td1">������</td>
            <td class="kszl_td2"><?php echo $username;?></td>
          </tr>
          <tr>
            <td class="kszl_td1">�Ա�</td>
            <td class="kszl_td2"><?php echo $row["sex"];?></td>
          </tr>
          <tr>
            <td class="kszl_td1">ѧ�ţ�</td>
            <td class="kszl_td2"><?php echo $row["stunumber"];?></td>
          </tr>
          <tr>
            <td class="kszl_td1">���֤�ţ�</td>
            <td class="kszl_td2"><?php echo $row["myid"];?></td>
          </tr>
          <tr>
            <td class="kszl_td1">Ժϵ��</td>
            <td class="kszl_td2"><?php echo $row["xueyuan"];?></td>
          </tr>
          <tr>
            <td class="kszl_td1">�༶��</td>
            <td class="kszl_td2"><?php echo $row["major"];?></td>
          </tr>
        </table>
      </div>
      <!--�ɼ���ѯ-->
      <div class="cherix">
        <table class="cjcx_table">
          <tr>
            <td class="cjcx_td1">ƽʱ�ɼ���</td>
            <td class="cjcx_td2"><?php echo $row["usualscore"];?></td>
          </tr>
          <tr>
            <td class="cjcx_td1">�����ɼ���</td>
            <td class="cjcx_td2"><?php echo $row["machscore"];?></td>
          </tr>
          <tr>
            <td class="cjcx_td1">�ܳɼ���</td>
            <td class="cjcx_td2"><?php echo $row["allscore"];?></td>
          </tr>
        </table>
      </div>
      <!--��������-->
      <div class="cherix">
        <div class="kcgz_font">&nbsp;&nbsp;&nbsp;&nbsp;һ�����������Ծ����Ӽ࿼Ա�ȿ��Թ�����Ա�����������κ����ɷ����࿼Ա�ȿ��Թ�����Ա����ְ�𣬲������ҿ��������������ص������ </div>
        <div class="kcgz_font">&nbsp;&nbsp;&nbsp;&nbsp;��������ƾ��׼��֤���������֤�������涨��ʱ�䣬��ָ���ص�μӿ��ԡ�</div>
        <div class="kcgz_font">&nbsp;&nbsp;&nbsp;&nbsp;������ǰ20���ӿ����볡����׼Я��������ľߺС��Ա������κ��鼮����ֽ��ֽ���Լ������κ��뿼���޹���Ʒ���뿼����</div>
      </div>
      <!--��ʦ����-->
      <div class="cherix">
        <div class="liuyan">&nbsp;&nbsp;&nbsp;��ͬѧƽʱ�Ͽ��������������Գɼ�������</div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="back"><a href="back.php"><img src="images/back3.gif" id="back1"/>
      <div class="back_font">�˳�</div>
      </a></div>
  </div>
</div>
</body>
</html>