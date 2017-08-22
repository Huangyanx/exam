<?php
require 'comm.php';
session_start();
unset($_SESSION["username"]);
page_jump( "index.php");
?>