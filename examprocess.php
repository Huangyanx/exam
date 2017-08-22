<?php
include 'conn.php';
require 'comm.php';
//自定义函数，用于排序
function sortBys($a, $b) {

	if (ord($a)==ord($b)) {

		return 0;

	} else {

		return (ord($a) >ord($b)) ? 1 : -1;

	}
 }
 
$single_score=0;
for ($i=0;$i<10;$i++){
	if(isset($_REQUEST['answer'.$i])){
		$answer=$_GET['answer'.$i];
		$k=$_GET['si'.$i];
		$query="select * from exam where id='$k'";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		//echo $answer."<br>".$row["answer"];
		if ($row['answer']==$answer) {
			$single_score+=5;
		}	
	}
}

$muli_score=0;

	for ($i=0;$i<10;$i++){
		 if(isset($_REQUEST[$i.'ans'])){
		 	 $mulians=$_GET['muli'.$i];
		$query="select * from exam where id= $mulians";
		$result=mysql_query($query);
		if (!$result) {
			page_jump("提交试卷失败！", "studentmag.php");
		}
		$roww=mysql_fetch_array($result);
		 	usort($_GET[$i.'ans'], 'sortBys');
		 	print_r($_GET[$i.'ans']);
		 	$c=implode($_GET[$i.'ans']);
		 	//echo $c."&nbsp;&nbsp;".$roww["answer"];
		 	if ($c===$roww["answer"]){
		 		$muli_score +=5;
		 	}		 	   
		}
		}
		//echo $single_score;
		//echo $muli_score;
	$score=$single_score+$muli_score;
	session_start();
	if (isset($_SESSION['username'])){
		$username=$_SESSION["username"];
		$query1="select * from teststudent where username='$username'";
		$result1=mysql_query($query1);
		if (!$result1) {
			page_jump("提交试卷失败！", "studentmag.php");
		}
		$rowww=mysql_fetch_array($result1);
		if ($rowww['score']==null||$score>$rowww['score']){
		mysql_query("update teststudent set score='$score'where username='$username'");
			
			}
		}

    page_jump("你的成绩为".$score, 'studentmag.php');  



?>