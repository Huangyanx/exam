<?php
include 'conn.php';
require 'comm.php';

session_start();
$ussername=$_GET["username"];
$password=$_GET["password"];
$code=$_GET["code"];
//$verifyCode=$_SESSION['verifyCode'];
$randcode=$_SESSION["randcode"];
$query="select * from teacher where username='$ussername'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);


if ($ussername==null||$password==null||$code==null) {
	page_jump("����������Ϣ�ٵ�½��", "index.php");
}else {
	if (strtoupper($code)!==strtoupper($randcode)) {
		page_jump("��֤������������������룡", "index.php");
	}
	else if (!$result) {
		page_jump("�û������ڣ�", "index.php");
	}else if ($password!==$row["password"]) {
		page_jump("����������������룡", "index.php");
	}
	else {
		page_jump("��½�ɹ���", "resultmanage.php");
	}
}



?>