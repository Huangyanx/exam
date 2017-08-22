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
	page_jump("请填完整信息登录！", "index.php");
}else {
	if (strtoupper($code)!==strtoupper($randcode)) {
		page_jump("输入的验证码错误，请重新输入！", "index.php");
		unset($_SESSION["verifyCode"]);
	}
	else if ($username!==$row["username"]) {
		page_jump("此考生不存在！", "index.php");
	}
	else if ($stunumber!==$row["stunumber"]) {
		page_jump("输入的准考证错误，请重新输入！", "index.php");
	}
	else {
		page_jump("登录成功！", "studentmag.php");
	}
}


?>