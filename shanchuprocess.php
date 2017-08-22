<?php
include 'conn.php';
require 'comm.php';
$id=$_GET["id"];
$query="delete from mastudent where id='$id'";
$result=mysql_query($query);
if ($result) {
	page_jump("É¾³ý³É¹¦£¡", "studentlist.php");
}else {
	page_jump("É¾³ýÊ§°Ü£¡", "studentlist.php");
}
?>