<head>
<script type="text/javascript"> 
function check_all(obj,cName) 
{ 
    var checkboxs = document.getElementsByName(cName); 
    for(var i=0;i<checkboxs.length;i++){
        checkboxs[i].checked = obj.checked;
        } 

} 
</script> 
</head>
<?php 
include 'conn.php';
require 'comm.php';
$sql="select * from mastudent";  
$rst=mysql_query($sql);
$totalnum=mysql_num_rows($rst);
$page=$totalnum/10;
$curpage=1;
$query="select id from mastudent limit 1 ";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$sum=10;

?>
<body>
	<form id="form1" name="form1" method="post" > 
		<h1 align="center">成绩管理</h1>
		<table border="1" frame="hsides" align="center">
			<tr><td><input type="checkbox" name="all" onclick="check_all(this,'checkbox[]')" />全选</td><td>id</td><td>姓名</td><td>学号</td><td>身份证</td><td width="350px">院系班级</td><td>操作</td> 
		    <tr><td><input type="checkbox" name="checkbox[]" /></td><td><?php echo $row["id"];?></td><td><?php echo $row["username"];?></td><td><?php echo $row["stunumber"];?></td></tr>
		    <?php 
		    do {	
		    	$nu1=$row["id"]+1;
		    	$query1="select * from mastudent where $nu1";
		    	$result1=mysql_query($query1);
		    	$row1=mysql_fetch_array($result);
		    	}
		    	while (!$result1)
		    
		    ?>
		    <tr><td><input type="checkbox" name="checkbox[]" /></td><td></td></tr>
		    <?php 
		    do {	
		    	$nu1=$row["id"]+1;
		    	$query1="select * from mastudent where $nu1";
		    	$result1=mysql_query($query1);
		    	$row1=mysql_fetch_array($result);
		    	}
		    	while (!$result1)
		    
		    ?>
		    <tr><td><input type="checkbox" name="checkbox[]" /></td></tr>
		    <?php 
		    do {	
		    	$nu1=$row["id"]+1;
		    	$query1="select * from mastudent where $nu1";
		    	$result1=mysql_query($query1);
		    	$row1=mysql_fetch_array($result);
		    	}
		    	while (!$result1)
		    
		    ?>
		    <tr><td><input type="checkbox" name="checkbox[]" /></td></tr>
		    <?php 
		    do {	
		    	$nu1=$row["id"]+1;
		    	$query1="select * from mastudent where $nu1";
		    	$result1=mysql_query($query1);
		    	$row1=mysql_fetch_array($result);
		    	}
		    	while (!$result1)
		    
		    ?>
		    <tr><td><input type="checkbox" name="checkbox[]" /></td></tr>
		    <?php 
		    do {	
		    	$nu1=$row["id"]+1;
		    	$query1="select * from mastudent where $nu1";
		    	$result1=mysql_query($query1);
		    	$row1=mysql_fetch_array($result);
		    	}
		    	while (!$result1)
		    
		    ?>
		    <tr><td><input type="checkbox" name="checkbox[]" /></td></tr>
		    <?php 
		    do {	
		    	$nu1=$row["id"]+1;
		    	$query1="select * from mastudent where $nu1";
		    	$result1=mysql_query($query1);
		    	$row1=mysql_fetch_array($result);
		    	}
		    	while (!$result1)
		    
		    ?>
		    <tr><td><input type="checkbox" name="checkbox[]" /></td></tr>
		    <?php 
		    do {	
		    	$nu1=$row["id"]+1;
		    	$query1="select * from mastudent where $nu1";
		    	$result1=mysql_query($query1);
		    	$row1=mysql_fetch_array($result);
		    	}
		    	while (!$result1)
		    
		    ?>
		    <tr><td><input type="checkbox" name="checkbox[]" /></td></tr>
		    <?php 
		    do {	
		    	$nu1=$row["id"]+1;
		    	$query1="select * from mastudent where $nu1";
		    	$result1=mysql_query($query1);
		    	$row1=mysql_fetch_array($result);
		    	}
		    	while (!$result1)
		    
		    ?>
		    <tr><td><input type="checkbox" name="checkbox[]" /></td></tr>
		    <?php 
		    do {	
		    	$nu1=$row["id"]+1;
		    	$query1="select * from mastudent where $nu1";
		    	$result1=mysql_query($query1);
		    	$row1=mysql_fetch_array($result);
		    	}
		    	while (!$result1)
		    
		    ?>
		    <tr><td><input type="checkbox" name="checkbox[]" /></td></tr>   
	
		</table> 
		<div align="center">
			<table><tr><td>首页</td><td>上一页</td><td>下一页</td><td>末页</td><td>共10条记录</td><td>当前第<?php echo $curpage?>页</td><td><input type="button" value="删除"/></td><td><input type="button" value="添加"/></td></tr></table>
			
		</div>
	</form>
</body>

