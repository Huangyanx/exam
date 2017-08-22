<?php
include 'conn.php';
require 'comm.php';

$username=$_GET["username"];
$sex=$_GET["sex"];
$stunumber=$_GET["stunumber"];
$ID=$_GET["ID"];
$xueyuan=$_GET["xueyuan"];
$major=$_GET["major"];
if ($username==null||$sex==null||$stunumber==null||$ID==null||$xueyuan==null||$major==null) {
	page_jump("请填完整信息！！", "addstudent.php");
}else {
	
$query="insert into mastudent (username,sex,stunumber,myid,xueyuan,major) value ('$username','$sex','$stunumber','$ID','$xueyuan','$major')";
$result=mysql_query($query);
if ($result) {
	page_jump("添加成功！","studentmanage.php");
}
else {
	page_jump("添加失败！", "addstudent.php");
}
}


?>