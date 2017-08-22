
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

<title>主界面</title>
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/index.js"></script>
<script type="text/javascript">
function upexam(){
  	
	var r=confirm("确定交卷？")
	  if (r==true)
		  {
		  alert("交卷成功！")
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
      <div class="banner_middle_font1">大学计算机基础考试系统</div>
      <div class="banner_middle_font2"><span class="span1"><?php echo $username?></span><span class="span2">同学，欢迎你进入考试系统</span></div>
    </div>
    <div class="banner_right"></div>
  </div>
  <div class="main">
    <div class="main_left">
      <div class="ul">
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/1.gif" id="img1" /></div>
            <div class="floor_font">模拟考试</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/2.gif" id="img2" /></div>
            <div class="floor_font">错题重现</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/3.gif" id="img3" /></div>
            <div class="floor_font">习题练习</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/4.gif" id="img4" /></div>
            <div class="floor_font">考生资料</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/5.gif" id="img5" /></div>
            <div class="floor_font">成绩查询</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/6.gif" id="img6" /></div>
            <div class="floor_font">考场规则</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
        <div class="li">
          <div class="floor1"><a href="#">
            <div class="floor_img"><img src="images/7.gif" id="img7" /></div>
            <div class="floor_font">老师留言</div>
            </a> </div>
          <div class="floor2"></div>
        </div>
      </div>
    </div>
    <div class="main_right"> 
      <!--模拟考试-->
      <div class="cherix">
      <form action="simulatedexam.php" name="form">
         <div class="cherix_item">单选题</div>
          
          <?php
		include 'conn.php';
		require 'comm.php';
			$se_pos=range(1, 19);//数据库有19道单选题
			$num=6;
			shuffle($se_pos);//调用现成的数组随机排列函数
			for ($i=0;$i<$num;$i++){
			$qest=mysql_query("select * from exam where id ='$se_pos[$i]'");
			$myrow_qest=mysql_fetch_array($qest);
			$xu=$i+1;
			 echo $xu."、";
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
					<?php echo $ar[$k]."、".$myrow_qest["$value"]; ?>&nbsp;&nbsp;
					<?php if ($k==2) echo "<br><br>"; ?>&nbsp;&nbsp;
					<?php $k++; 
				}echo '<br></br>';
				
			} 
				?>
		          		
         <div class="cherix_item">多选题</div>
         
         <?php 
		$mulitiple=range(20, 31);
		$num=5;
		shuffle($mulitiple);
		for ($i=0;$i<$num;$i++){
		$query="select * from exam where id='$mulitiple[$i]' ";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		$xu=$i+1;
		echo $xu."、";
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
				<?php echo $ar[$k]."、".$row["$value"]; ?><br></br>
				<?php $k++; 
			}
				
		}
		
		?>
		<div class="upexam"><input type="submit" value="提交试卷" onmousedown="upexam()"/></div>
		</form>
         
      </div>
      <!--错题重现-->
      <div class="cherix">
        <div class="cherix_item">单选题</div>
        <table class="cherix_table">
          <tr class="first_tr">
            <td>&nbsp;1.中华人民共和国成立于哪一年？</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj1q"/>
              &nbsp;&nbsp;1946年</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj1q" />
              &nbsp;&nbsp;1947年</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj1q" />
              &nbsp;&nbsp;1948年</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj1q" />
              &nbsp;&nbsp;1949年</td>
          </tr>
        </table>
        <table class="cherix_table">
          <tr class="first_tr">
            <td>&nbsp;1.中华人民共和国成立于哪一年？</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj2q"/>
              &nbsp;&nbsp;1946年</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj2q" />
              &nbsp;&nbsp;1947年</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj2q" />
              &nbsp;&nbsp;1948年</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj2q" />
              &nbsp;&nbsp;1949年</td>
          </tr>
        </table>
        <table class="cherix_table">
          <tr class="first_tr">
            <td>&nbsp;1.中华人民共和国成立于哪一年？</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj3q"/>
              &nbsp;&nbsp;1946年</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj3q" />
              &nbsp;&nbsp;1947年</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj3q" />
              &nbsp;&nbsp;1948年</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="radio" name="jj3q" />
              &nbsp;&nbsp;1949年</td>
          </tr>
        </table>
        <div class="cherix_item">多选题</div>
        <table class="cherix_table">
          <tr class="first_tr">
            <td>&nbsp;1.你最喜欢的明星是谁？</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="checkbox"/>
              &nbsp;&nbsp;黄晓明</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="checkbox"/>
              &nbsp;&nbsp;周杰伦</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="checkbox"/>
              &nbsp;&nbsp;吴尊</td>
          </tr>
          <tr class="other_tr">
            <td>&nbsp;&nbsp;
              <input type="checkbox"/>
              &nbsp;&nbsp;范玮琪</td>
          </tr>
        </table>
      </div>
      <!--习题练习-->
      <div class="cherix">
        <div class="cherix_item">单选题</div>
        
        <?php
		include 'conn.php';
			$num=19;
			for ($i=1;$i<=$num;$i++){
			$qest=mysql_query("select * from exam where id ='$i'");
			$myrow_qest=mysql_fetch_array($qest);
			 echo $i."、";
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
					<?php echo $arry["$k"]."、".$myrow_qest["$value"]; ?>&nbsp;&nbsp;
					<?php if ($k==1) echo "<br><br>"; ?>&nbsp;&nbsp;
					<?php $k++; 
				}echo '<br></br>';
				
			} 
				?>
		          		
         <div class="cherix_item">多选题</div>
         
         <?php 
		
		
		for ($i=20;$i<=31;$i++){
		$query="select * from exam where id='$i' ";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		
		echo $i."、";
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
				<?php echo $arry["$k"]."、".$row["$value"]; ?><br></br>
				<?php $k++; 
			}
				
		}
		
		?>
      </div>
      <!--考生资料-->
      <div class="cherix" style="position:relative">
      <?php $query="select * from mastudent where username='$username'";
        	$result=mysql_query($query);
        	$row=mysql_fetch_array($result);
        ?>
        <div class="touxiang"><img src="<?php echo $row['photo'];?>" height="146px" width="123px"/></div>
        <div class="cherix_item">考生资料</div>
        <table class="kszl_table">
          <tr>
            <td class="kszl_td1">姓名：</td>
            <td class="kszl_td2"><?php echo $username;?></td>
          </tr>
          <tr>
            <td class="kszl_td1">性别：</td>
            <td class="kszl_td2"><?php echo $row["sex"];?></td>
          </tr>
          <tr>
            <td class="kszl_td1">学号：</td>
            <td class="kszl_td2"><?php echo $row["stunumber"];?></td>
          </tr>
          <tr>
            <td class="kszl_td1">身份证号：</td>
            <td class="kszl_td2"><?php echo $row["myid"];?></td>
          </tr>
          <tr>
            <td class="kszl_td1">院系：</td>
            <td class="kszl_td2"><?php echo $row["xueyuan"];?></td>
          </tr>
          <tr>
            <td class="kszl_td1">班级：</td>
            <td class="kszl_td2"><?php echo $row["major"];?></td>
          </tr>
        </table>
      </div>
      <!--成绩查询-->
      <div class="cherix">
        <table class="cjcx_table">
          <tr>
            <td class="cjcx_td1">平时成绩：</td>
            <td class="cjcx_td2"><?php echo $row["usualscore"];?></td>
          </tr>
          <tr>
            <td class="cjcx_td1">机考成绩：</td>
            <td class="cjcx_td2"><?php echo $row["machscore"];?></td>
          </tr>
          <tr>
            <td class="cjcx_td1">总成绩：</td>
            <td class="cjcx_td2"><?php echo $row["allscore"];?></td>
          </tr>
        </table>
      </div>
      <!--考场规则-->
      <div class="cherix">
        <div class="kcgz_font">&nbsp;&nbsp;&nbsp;&nbsp;一、考生必须自觉服从监考员等考试工作人员管理，不得以任何理由妨碍监考员等考试工作人员履行职责，不得扰乱考场及其他工作地点的秩序。 </div>
        <div class="kcgz_font">&nbsp;&nbsp;&nbsp;&nbsp;二、考生凭《准考证》、《身份证》，按规定的时间，到指定地点参加考试。</div>
        <div class="kcgz_font">&nbsp;&nbsp;&nbsp;&nbsp;三、考前20分钟考生入场，不准携带书包、文具盒、自备垫板和任何书籍、报纸、纸张以及其他任何与考试无关物品进入考场。</div>
      </div>
      <!--老师留言-->
      <div class="cherix">
        <div class="liuyan">&nbsp;&nbsp;&nbsp;该同学平时上课认真听讲，考试成绩优良。</div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="back"><a href="back.php"><img src="images/back3.gif" id="back1"/>
      <div class="back_font">退出</div>
      </a></div>
  </div>
</div>
</body>
</html>