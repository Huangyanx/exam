<?php
require 'comm.php';
session_start();
if (isset($_SESSION["destination"])){
	unset($_SESSION["destination"]);
}
if (isset($_SESSION["username"])) {
	unset($_SESSION["username"]);
}
if (isset($_SESSION["id"])) {
	unset($_SESSION["id"]);
	if (isset($_SESSION["destination"])){
		unset($_SESSION["destination"]);
	}
	page_jump("����", "studentmanage.php");
}

page_jump("�˳�", "index.php");
?>
