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
		<h1 align="center">�ɼ�����</h1>
		<table border="1" frame="hsides" align="center">
			<tr><td><input type="checkbox" name="all" onclick="check_all(this,'checkbox[]')" />ȫѡ</td><td>id</td><td>����</td><td>ѧ��</td><td>���֤</td><td width="350px">Ժϵ�༶</td><td>����</td> 
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
			<table><tr><td>��ҳ</td><td>��һҳ</td><td>��һҳ</td><td>ĩҳ</td><td>��10����¼</td><td>��ǰ��<?php echo $curpage?>ҳ</td><td><input type="button" value="ɾ��"/></td><td><input type="button" value="���"/></td></tr></table>
			
		</div>
	</form>
</body>

