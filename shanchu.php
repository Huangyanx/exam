<?php
include 'conn.php';
require 'comm.php';
if (isset($_GET["del"])) {
	foreach ($_GET["del"] as $value ){
		$query="delete from mastudent where id='$value'";
		$result=mysql_query($query);
		if (!$result) {
			page_jump("ɾ��ʧ�ܣ�", "studentmanage.php");
		}
	}
	page_jump("ɾ���ɹ���", "studentmanage.php");
}else {
	page_jump("��ѡ����Ҫɾ����ѡ�", "studentmanage.php");
}


?>