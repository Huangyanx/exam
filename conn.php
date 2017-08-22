<?php
$link = mysql_connect ( "localhost", "hostroot", "123456" )or die("未能连接数据库".mysql_error());
mysql_select_db ( 'db' );
mysql_query ( "set names 'GB2312' " );
?>