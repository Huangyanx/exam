<?php 
require 'comm.php'; 
include 'conn.php';
/****************************************************************************** 
 
����˵��: 
$max_file_size  : �ϴ��ļ���С����, ��λBYTE 
$destination_folder : �ϴ��ļ�·�� 
$watermark   : �Ƿ񸽼�ˮӡ(1Ϊ��ˮӡ,����Ϊ����ˮӡ); 
 
ʹ��˵��: 
1. ��PHP.INI�ļ������"extension=php_gd2.dll"һ��ǰ���;��ȥ��,��Ϊ����Ҫ�õ�GD��; 
2. ��extension_dir =��Ϊ���php_gd2.dll����Ŀ¼; 
******************************************************************************/  
  
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')  
{  
	if (isset($_POST["submit1"])) {//�˴��жϴ���������ͼƬ���߱�����ҳ������
		
		//�ϴ��ļ������б�
		$uptypes=array(
				'image/jpg',
				'image/jpeg',
				'image/png',
				'image/bmp',
		);
		
		$max_file_size=2000000;     //�ϴ��ļ���С����, ��λBYTE
		$destination_folder="uploadimg/"; //�ϴ��ļ�·��
		if (!is_uploaded_file($_FILES["upfile"]["tmp_name"]))
			//�Ƿ�����ļ�
		{
			echo "ͼƬ������!";
			page_jump("ͼƬ�����ڣ�", "apply.php");
		}
		else {
			$file = $_FILES["upfile"];
		
			if($max_file_size < $file["size"])
				//����ļ���С
			{
				echo "�ļ�̫��!";
				page_jump("�ļ�̫��!", "apply.php");
			}
			 
			else if(!in_array($file["type"], $uptypes))
				//����ļ�����
			{
				echo "�ļ����Ͳ���!".$file["type"];
				page_jump("�ļ����Ͳ���!", "apply.php");
			}
			 
			else {
				if(!file_exists($destination_folder))
					mkdir($destination_folder); //�����ļ���
		
				$filename=$file["tmp_name"];
				$image_size = getimagesize($filename);
				$pinfo=pathinfo($file["name"]);
				$ftype=$pinfo['extension'];
				$destination = $destination_folder.time().".".$ftype;
				session_start();
				$_SESSION["destination"]=$destination;
				if (file_exists($destination) && $overwrite != true)
				{
					echo "ͬ���ļ��Ѿ�������";
					page_jump("ͬ���ļ��Ѿ�������!", "apply.php");
				}
				 
				else if(!move_uploaded_file ($filename, $destination))
				{
					echo "�ƶ��ļ�����";
					page_jump("�ƶ��ļ�����!", "apply.php");
				}
				else {
					page_jump("�ϴ��ɹ���", "apply.php");
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
			page_jump("��δ�ϴ���Ƭ�����ϴ���Ƭ��", "apply.php");
		}
		
		//���֤��֤
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
		// �������֤У���룬���ݹ��ұ�׼GB 11643-1999
		function idcard_verify_number($idcard_base)
		{
			if(strlen($idcard_base) != 17)
			{
				return false;
			}
			//��Ȩ����
			$factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
			//У�����Ӧֵ
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
			// ��15λ���֤������18λ
			function idcard_15to18($idcard){
			if (strlen($idcard) != 15){
				return false;
			}else{
			// ������֤˳������996 997 998 999����Щ��Ϊ�����������˵��������
				if (array_search(substr($idcard, 12, 3), array('996', '997', '998', '999')) !== false){
				$idcard = substr($idcard, 0, 6) . '18'. substr($idcard, 6, 9);
			}else{
			$idcard = substr($idcard, 0, 6) . '19'. substr($idcard, 6, 9);
			}
			}
			$idcard = $idcard . idcard_verify_number($idcard);
			return $idcard;
			}
			// 18λ���֤У������Ч�Լ��
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
			page_jump("����������Ϣ���ٵ�½", "apply.php");
		}
		else {
			$query="select * from mastudent where";
			$result=mysql_query($query);
			$row=mysql_fetch_array($result);
			if ($username==$row["username"]){
				page_jump("��ѧ���ѱ�����", "apply.php");
			}
			else if (strlen($studentnum)!==10&&!is_numeric($studentnum)) {
				page_jump("ѧ�ű�����10λ���֣�", "apply.php");
			}
			else if ($studentnum==$row["stunumber"]) {
				page_jump("��ѧ���Ѿ����ڣ���������ѧ�ţ�", "apply.php");
			}
			else if(!validation_filter_id_card($_POST['ID']))
			{
				echo "Illegal ID!!!";
				page_jump("��������֤�������������룡", "apply.php");
			}
			else {
				$query="insert into mastudent (username,sex,stunumber,myid,xueyuan,major) value ('$username','$sex','$studentnum','$ID','$xueyuan','$banji')";
				$result=mysql_query($query);
				if ($result) {
					page_jump("�����ɹ���", "teacherlogin.php");
				}
				else {
					page_jump("����ʧ�ܣ�", "apply.php");
				}
				
			}
			
		}
	}
			
}  
?>    