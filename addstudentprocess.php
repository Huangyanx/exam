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
	page_jump("����������Ϣ����", "addstudent.php");
}else {
	
$query="insert into mastudent (username,sex,stunumber,myid,xueyuan,major) value ('$username','$sex','$stunumber','$ID','$xueyuan','$major')";
$result=mysql_query($query);
if ($result) {
	page_jump("��ӳɹ���","studentmanage.php");
}
else {
	page_jump("���ʧ�ܣ�", "addstudent.php");
}
}


?>