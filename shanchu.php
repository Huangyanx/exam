<?php
include 'conn.php';
require 'comm.php';
if (isset($_GET["del"])) {
	foreach ($_GET["del"] as $value ){
		$query="delete from mastudent where id='$value'";
		$result=mysql_query($query);
		if (!$result) {
			page_jump("删除失败！", "studentmanage.php");
		}
	}
	page_jump("删除成功！", "studentmanage.php");
}else {
	page_jump("请选择你要删除的选项！", "studentmanage.php");
}


?>