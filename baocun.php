<?php
include 'conn.php';
require 'comm.php';
if (isset($_GET["all"])){
	foreach ($_GET["all"] as $value){
		$usual=$_GET["usual"];
		$sum=$_GET["sum"];
		$much=$_GET["much"];
		$query="update mastudent set usualscore='$usual',allscore='$sum',muchscore='$much' where id='$value'";
		$result=mysql_query($query);
		if (!$result) {
			page_jump("����ʧ�ܣ�", "resultmanage.php");
		}
	}
	page_jump("����ɹ���", "resultmanage.php");
}


?>