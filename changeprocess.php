<?php
include 'conn.php';
require 'comm.php';

		session_start();
		$id=$_SESSION["id"];
		$destination=$_SESSION["destination"];
		$username=$_POST["username"];
		$sex=$_POST["sex"];
		$stunumber=$_POST["stunumber"];
		$ID=$_POST["ID"];
		$xuetyan=$_POST["xueyuan"];
		$major=$_POST["major"];
		$query="update mastudent set username='$username', sex='$sex', stunumber='$stunumber',myid='$ID',xueyuan='$xuetyan',major='$major',photo='$destination' where id='$id'";
		$result=mysql_query($query);
		unset($_SESSION["destination"]);
		if ($result){
			page_jump("修改成功！", "studentmanage.php");
		}else {
			page_jump("修改失败！", "changmassege.php?id='$id'");
		}
	
	
?>