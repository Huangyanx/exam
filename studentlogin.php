<?php
include 'conn.php';
require 'comm.php';

session_start();
$username=$_GET["username"];
$_SESSION["username"]=$username;
$stunumber=$_GET["stunumber"];
$code=$_GET["code"];
//$verifyCode=$_SESSION['verifyCode'];
$randcode=$_SESSION["randcode"];
//echo $verifyCode;

$query="select * from mastudent";
$result=mysql_query($query);
$row=mysql_fetch_array($result);

if ($username==null||$stunumber==null||$code==null) {
	page_jump("����������Ϣ��¼��", "index.php");
}else {
	if (strtoupper($code)!==strtoupper($randcode)) {
		page_jump("�������֤��������������룡", "index.php");
		unset($_SESSION["verifyCode"]);
	}
	else if ($username!==$row["username"]) {
		page_jump("�˿��������ڣ�", "index.php");
	}
	else if ($stunumber!==$row["stunumber"]) {
		page_jump("�����׼��֤�������������룡", "index.php");
	}
	else {
		page_jump("��¼�ɹ���", "studentmag.php");
	}
}


?>