
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>考试页面</title>
<link href="style/Exam.css" type="text/css" media="all" rel="stylesheet" />
<script type="text/javascript"  src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/Exam.js"></script>
<style type="text/css">
#timer{
	position:fixed;
	right:80px;
	top:5px;
	width:350px;
	height:30px;
	
}
</style>

<script language="javascript" type="text/javascript">
var maxtime;

if(window.name==''){
maxtime = 60*60*2;
}else{
maxtime = window.name;
}
function CountDown(){
if(maxtime>=0){
hours=Math.floor(maxtime/3600)
minutes = Math.floor(maxtime%3600/60);
seconds = Math.floor(maxtime%3600%60);
msg = "距离考试结束还有"+hours+"小时"+minutes+"分"+seconds+"秒";
document.all["timer"].innerHTML = msg;
--maxtime;
window.name = maxtime;
}
else{
clearInterval(timer);
alert("时间到考试结束!");
document.form.submit();
/* window.location.href = "examprocess.php"; */
//form提交，实现自动交卷

}
}
timer = setInterval("CountDown()",1000);


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
</head>
<body scroll="auto">
<div class="container">

  <div class="timer"> 
  <div class="time"><img class="pic2" src="images/pic2.jpg" /></div>
     <table>
        <div id="timer" style="color:red"> </div>
     </table>
  </div>
  <div class="container1">
    <div class="banner">
      <div class="banner-bg"><img class="pic1" src="images/zhanshi_banner.gif" /></div>
      <div class="text1">大学计算机文化基础</div>
      <div class="submit">
      <script type="text/javascript">
	    $(document).ready(function(e) {
            $('.submit').click(function(e) {
                 window.close();
				 
			  
            });
			
		 
        });
	  </script>
       <!--  <a href="examprocess.php"><img src="images/pic1.jpg" /></a>-->
      </div>
    </div>
    <div class="layout">
      
      <div class="test">
      <form action="examprocess.php" name="form">
          <div class="cherix_item">单选题</div>
          
          <?php
		include 'conn.php';
		require 'comm.php';
			$se_pos=range(1, 19);//数据库有19道单选题
			shuffle($se_pos);//调用现成的数组随机排列函数
			for ($i=0;$i<10;$i++){
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
		shuffle($mulitiple);
		for ($i=0;$i<10;$i++){
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
		
		</form>
         
        <input type="image" src="images/pic1.jpg" onmousedown="upexam()"/>
      </div>
    </div>
  </div>
  <div class="footer"></div>
</div>
</body>
</html>
