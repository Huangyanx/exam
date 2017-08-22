<?php 
require 'comm.php'; 
include 'conn.php';
/****************************************************************************** 
 
参数说明: 
$max_file_size  : 上传文件大小限制, 单位BYTE 
$destination_folder : 上传文件路径 
$watermark   : 是否附加水印(1为加水印,其他为不加水印); 
 
使用说明: 
1. 将PHP.INI文件里面的"extension=php_gd2.dll"一行前面的;号去掉,因为我们要用到GD库; 
2. 将extension_dir =改为你的php_gd2.dll所在目录; 
******************************************************************************/  
  
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')  
{  
	if (isset($_POST["submit1"])) {//此处判断传过来的是图片或者报名的页面数据
		
		//上传文件类型列表
		$uptypes=array(
				'image/jpg',
				'image/jpeg',
				'image/png',
				'image/bmp',
		);
		
		$max_file_size=2000000;     //上传文件大小限制, 单位BYTE
		$destination_folder="uploadimg/"; //上传文件路径
		if (!is_uploaded_file($_FILES["upfile"]["tmp_name"]))
			//是否存在文件
		{
			echo "图片不存在!";
			page_jump("图片不存在！", "apply.php");
		}
		else {
			$file = $_FILES["upfile"];
		
			if($max_file_size < $file["size"])
				//检查文件大小
			{
				echo "文件太大!";
				page_jump("文件太大!", "apply.php");
			}
			 
			else if(!in_array($file["type"], $uptypes))
				//检查文件类型
			{
				echo "文件类型不符!".$file["type"];
				page_jump("文件类型不符!", "apply.php");
			}
			 
			else {
				if(!file_exists($destination_folder))
					mkdir($destination_folder); //创建文件包
		
				$filename=$file["tmp_name"];
				$image_size = getimagesize($filename);
				$pinfo=pathinfo($file["name"]);
				$ftype=$pinfo['extension'];
				$destination = $destination_folder.time().".".$ftype;
				session_start();
				$_SESSION["destination"]=$destination;
				if (file_exists($destination) && $overwrite != true)
				{
					echo "同名文件已经存在了";
					page_jump("同名文件已经存在了!", "apply.php");
				}
				 
				else if(!move_uploaded_file ($filename, $destination))
				{
					echo "移动文件出错";
					page_jump("移动文件出错!", "apply.php");
				}
				else {
					page_jump("上传成功！", "apply.php");
				}
				 
		
			}
		
		
		}
	}
	else {
		$username=$_POST["username"];
		$sex=$_POST["sex"];
		$xueyuan=$_POST["xueyuan"];
		$banji=$_POST["banji"];
		$studentnum=$_POST["studentnum"];
		$ID=$_POST["ID"];
		if (isset($_SESSION["destination"])) {
			$destination=$_SESSION["destination"];
		}
		else {
			page_jump("尚未上传相片，请上传相片！", "apply.php");
		}
		
		//身份证验证
		function validation_filter_id_card($id_card)
		{
			if(strlen($id_card) == 18)
			{
				return idcard_checksum18($id_card);
			}
			elseif((strlen($id_card) == 15))
			{
				$id_card = idcard_15to18($id_card);
				return idcard_checksum18($id_card);
			}
			else
			{
				return false;
			}
		}
		// 计算身份证校验码，根据国家标准GB 11643-1999
		function idcard_verify_number($idcard_base)
		{
			if(strlen($idcard_base) != 17)
			{
				return false;
			}
			//加权因子
			$factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
			//校验码对应值
			$verify_number_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
			$checksum = 0;
			for ($i = 0; $i < strlen($idcard_base); $i++)
			{
			$checksum += substr($idcard_base, $i, 1) * $factor[$i];
			}
			$mod = $checksum % 11;
			$verify_number = $verify_number_list[$mod];
			return $verify_number;
		}
			// 将15位身份证升级到18位
			function idcard_15to18($idcard){
			if (strlen($idcard) != 15){
				return false;
			}else{
			// 如果身份证顺序码是996 997 998 999，这些是为百岁以上老人的特殊编码
				if (array_search(substr($idcard, 12, 3), array('996', '997', '998', '999')) !== false){
				$idcard = substr($idcard, 0, 6) . '18'. substr($idcard, 6, 9);
			}else{
			$idcard = substr($idcard, 0, 6) . '19'. substr($idcard, 6, 9);
			}
			}
			$idcard = $idcard . idcard_verify_number($idcard);
			return $idcard;
			}
			// 18位身份证校验码有效性检查
			function idcard_checksum18($idcard){
			if (strlen($idcard) != 18){ return false; }
			$idcard_base = substr($idcard, 0, 17);
			if (idcard_verify_number($idcard_base) != strtoupper(substr($idcard, 17, 1))){
			return false;
			}else{
			return true;
			}
			}
			
			
			
		if ($username==""||$sex==null||$xuetyan==null||$banji==null||$studentnum==null||$ID==null) {
			page_jump("请填完整信息！再登陆", "apply.php");
		}
		else {
			$query="select * from mastudent where";
			$result=mysql_query($query);
			$row=mysql_fetch_array($result);
			if ($username==$row["username"]){
				page_jump("此学生已报名！", "apply.php");
			}
			else if (strlen($studentnum)!==10&&!is_numeric($studentnum)) {
				page_jump("学号必须是10位数字！", "apply.php");
			}
			else if ($studentnum==$row["stunumber"]) {
				page_jump("此学号已经存在，请输入别的学号！", "apply.php");
			}
			else if(!validation_filter_id_card($_POST['ID']))
			{
				echo "Illegal ID!!!";
				page_jump("输入的身份证有误，请重新输入！", "apply.php");
			}
			else {
				$query="insert into mastudent (username,sex,stunumber,myid,xueyuan,major) value ('$username','$sex','$studentnum','$ID','$xueyuan','$banji')";
				$result=mysql_query($query);
				if ($result) {
					page_jump("报名成功！", "teacherlogin.php");
				}
				else {
					page_jump("报名失败！", "apply.php");
				}
				
			}
			
		}
	}
			
}  
?>    