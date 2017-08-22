<?php
require 'comm.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	

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
			page_jump("图片不存在！", "changemassege.php");
		}
		else {
			$file = $_FILES["upfile"];

			if($max_file_size < $file["size"])
				//检查文件大小
			{
				echo "文件太大!";
				page_jump("文件太大!", "changemassege.php");
			}

			else if(!in_array($file["type"], $uptypes))
				//检查文件类型
			{
				echo "文件类型不符!".$file["type"];
				page_jump("文件类型不符!", "changemassege.php");
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
					page_jump("同名文件已经存在了!", "changemassege.php");
				}
					
				else if(!move_uploaded_file ($filename, $destination))
				{
					echo "移动文件出错";
					page_jump("移动文件出错!", "changemassege.php");
				}
				else {
					page_jump("上传成功！", "changemassege.php");
				}
					

			}


		}
	
}