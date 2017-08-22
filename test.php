<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>大学计算机文化基础考试</title>
<style type="text/css">
body{
	text-aglin:center;
	background:ABC9E8;
}
/* fieldset{
	width:1000px;
	position:fixed;
	right:30px;
} */
 h1{
	text-align:center;
}
#timer{
	position:fixed;
	right:0px;
	top:0px;
	width:250px;
	height:30px;
	
}
upexam{
	width:250px;
	height:50px;
	position:fixed;
	right:0px;
	
}
input{
	background-color:ABC9E8;
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
<body>
<!--<fieldset style="border:hidden" style="padding-right:30px">-->
<h1>大学计算机文化基础考试</h1>
<h3>一、单项选择（10道题/5'）</h3>
<div id="timer" style="color:red"> </div>
<form action="examprocess.php" name="form">

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




<h3>二、多项选择（10道题/5'）</h3>
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

<div class="upexam"><input type="submit" value="提交试卷" onmousedown="upexam()"/></div>
</form>
<!-- </fieldset> -->
</body>
</html>