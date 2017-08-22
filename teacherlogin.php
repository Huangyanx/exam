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
	page_jump("请填完整信息再登陆！", "index.php");
}else {
	if (strtoupper($code)!==strtoupper($randcode)) {
		page_jump("验证码输入错误，请重新输入！", "index.php");
	}
	else if (!$result) {
		page_jump("用户不存在！", "index.php");
	}else if ($password!==$row["password"]) {
		page_jump("密码错误，请重新输入！", "index.php");
	}
	else {
		page_jump("登陆成功！", "resultmanage.php");
	}
}



?>