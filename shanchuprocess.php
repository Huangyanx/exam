<?php
include 'conn.php';
require 'comm.php';
$id=$_GET["id"];
$query="delete from mastudent where id='$id'";
$result=mysql_query($query);
if ($result) {
	page_jump("ɾ���ɹ���", "studentlist.php");
}else {
	page_jump("ɾ��ʧ�ܣ�", "studentlist.php");
}
?>