<?php
require 'comm.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	

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
			page_jump("ͼƬ�����ڣ�", "changemassege.php");
		}
		else {
			$file = $_FILES["upfile"];

			if($max_file_size < $file["size"])
				//����ļ���С
			{
				echo "�ļ�̫��!";
				page_jump("�ļ�̫��!", "changemassege.php");
			}

			else if(!in_array($file["type"], $uptypes))
				//����ļ�����
			{
				echo "�ļ����Ͳ���!".$file["type"];
				page_jump("�ļ����Ͳ���!", "changemassege.php");
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
					page_jump("ͬ���ļ��Ѿ�������!", "changemassege.php");
				}
					
				else if(!move_uploaded_file ($filename, $destination))
				{
					echo "�ƶ��ļ�����";
					page_jump("�ƶ��ļ�����!", "changemassege.php");
				}
				else {
					page_jump("�ϴ��ɹ���", "changemassege.php");
				}
					

			}


		}
	
}