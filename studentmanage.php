
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/StudentsManage.css" type="text/css" media="all" rel="stylesheet" />
<title>��������</title>
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/StudentsManage.js"></script>
<script type="text/javascript">
 function sent(){
	 document.getElementByIdx_x('myform').submit();//�ύ��
} 
</script>
</head>

<body ondragstart="return false" draggable="return false"  
        ondragenter="return false"  
        ondragover="return false"  
        ondrop="return false"
        onpaste="return false"  >
<!--��ֹ���������������Ƶȵ�-->
        <?php 
        include 'conn.php';
        $sql = "select * from mastudent";   
        
        $result = mysql_query($sql);
        
        $numbers = mysql_num_rows($result);    //�õ��������rows
        $page_size=10;
        $page_num=ceil($numbers/$page_size);//ҳ����ceil���ش��ڻ��ߵ���ָ�����ʽ����С����
			
			//�жϵ�ǰҳ��
		if (isset($_GET['page']))
		    {    
		        $page = intval($_GET['page']);
		    }
		    else
		    {
		        $page = 1;        //�����������ָ���һҳ
		    }
    
			$lastpage=$page_num;
			if ($page==$lastpage) {
				$page_size=$numbers%$page_size;
			} 
        
        ?>
        
        
        
<div id="all">
  <div class="banner">
    <div class="banner_f1">
      <div class="banner_font"><strong>���Ͽ���ϵͳ��̨</strong></div>
    </div>
    <div class="banner_f2"> </div>
    <div class="banner_f3"></div>
    <div class="banner_f4"></div>
  </div>
  <div class="main">
    <div class="main_font">��������</div>
    <div class="clear"></div>
    <div class="f1">
       <form>
      <div class="f1_font">������</div>
      <div class="f1_input">
        <input type="text"  id="f1_input" />
      </div>
      <select id="s1"  >
        <option value="��ѡ��">--��ѡ��--</option>
        <option class="sss" value="����Ժ" >����Ժ</option>
        <option class="sss"  value="����Ժ" >����Ժ</option>
        <option class="sss"  value="��ѧԺ" >��ѧԺ</option>
      </select>
      <select  id="s2" class="sele">
        <option >--��ѡ��--</option>
      </select>
      <select id="s3" class="sele" style="display:none">
        <option value="��ѡ��">--��ѡ��--</option>
        <option>�ż�</option>
        <option>ͳ��</option>
        <option>����</option>
      </select>
      <select id="s4" class="sele" style="display:none">
        <option value="��ѡ��">--��ѡ��--</option>
        <option>���</option>
        <option>԰��</option>
        <option>����</option>
      </select>
      <select id="s5" class="sele" style="display:none">
        <option value="��ѡ��">--��ѡ��--</option>
        <option>����</option>
        <option>���</option>
        <option>��ҩ</option>
      </select>
      <div class="search_img">
        <input type="image" src="images/fangdajing.gif" id="search_img" />
      </div>
    </form>
    </div>
    <div class="f2">
      <div class="f2_l">
        <ul class="ul">
          <li class="blank"></li>
          <li class="z"><a href="resultmanage.php">�ɼ�����</a></li>
          <li class="z"><a href="studentmanage.php">��������</a></li>
          <li class="z"><a href="question.php">������</a></li>
          <li class="z"><a href="studentlist.php">�����б�</a></li>
          <li class="z"><a href="print.php">��ӡ׼��֤</a></li>
        </ul>
      </div>
      <div class="f2_r">
        <form action="shanchu.php" id="myfrom">
          <div class="message"> 
            <!-- <div class="message_f1"> <span class="m_f1_span1">
              <input type="checkbox" class="cc" />
              </span> <span class="m_f1_span2">ȫѡ</span> <span class="m_f1_span3">ID</span> <span class="m_f1_span4">����</span> <span class="m_f1_span5">ѧ��</span> <span class="m_f1_span6">���֤��</span> <span class="m_f1_span7">Ժϵ�༶</span> <span class="m_f1_span8">����</span> </div>-->
            <table class="table">
              <tr>
                <td class="td1"><input type="checkbox" class="cc" />
                  ȫѡ</td>
                <td class="td2">ID</td>
                <td class="td3">����</td>
                <td class="td4">ѧ��</td>
                <td class="td5">���֤��</td>
                <td class="td6">Ժϵ�༶</td>
                <td class="td7">����</td>
              </tr>
            </table>
            <div class="hr1"></div>
            <div class="hr2"></div>
            <div class="hr3"></div>
            <div class="message_f2"> 
              <table class="table">
               <?php 
               $offset=$page_size*($page-1);
               $query="select * from mastudent limit $offset,$page_size";
               $result=mysql_query($query);
             if($result==true){ 
            	 while(@$myrow=mysql_fetch_array($result)){ 
				?>
				<tr>
				<td class="td1"><input type="checkbox" class="c" name="del[]" value="<?php echo $myrow['id'];?>"/></td>  
				<td class="td2"><?php echo $myrow["id"];?></td> 
				<td class="td3"><?php echo $myrow["username"];?></td> 
				<td class="td4"><?php echo $myrow["stunumber"];?></td> 
				<td class="td5"><?php echo $myrow["myid"]; ?></td>
				<td class="td6"><?php echo $myrow["xueyuan"].$myrow["major"];?></td>
				<td class="td7"><a href="changemassege.php?id=<?php echo $myrow['id'];?>">�޸�</a>|<a href="studentmassege.php?id=<?php echo $myrow["id"];?>">�鿴</a></td>
				</tr> 
				<?php }
				} ?>  
		               
               </table>
            </div>
            <div class="message_f3">
              <div class="span_ul">
       				<?php 
       				
       				if($page!=1){?>
						<div class="span_1">
					 
						<a href="studentmanage.php?page=1">��ҳ</a> 
						</div>
						<div class="span_2">
						<a href="studentmanage.php?page=<?php echo ($page-1);?>">��һҳ</a></div>
						<?php }else {?> 
						<div class="span_1">��ҳ</div>  
						<div class="span_2">��һҳ</div>
						<?php }
						
						if($page!=$lastpage){?>
						<div class="span_3">
						<a href="studentmanage.php?page=<?php echo ($page+1); ?>">��һҳ</a> </div>
						<div class="span_4">
						<a href="studentmanage.php?page=<?php echo $lastpage;?>">ĩҳ</a></div>
						<?php }else {?>
							<div class="span_3">��һҳ </div>
							<div class="span_4">ĩҳ</div>
						<?php }?>
						
						
						
                
                
                <div class="span_5">��</div>
                <div class="span_6"> <?php echo $page_size;?></div>
                <div class="span_7">����¼</div>
                <div class="span_8">��ǰ��</div>
                <div class="span_9"><?php echo $page;?> </div>
                <div class="span_10">ҳ</div>
              </div>
              <div class="shanchu"><input type="image" src="images/shanchu.gif" id="shanchu" onclick="sent()"/></div>
              <div class="tianjia"><a href="addstudent.php"><img src="images/tianjia.gif" id="tianjia" /></a></div>
              </div>
          </div>
        </form>
      </div>
    </div>
    <div class="f3">
      <div class="back6"><a href="index.php"><img src="images/back6.gif" id="back6" /></a></div>
    </div>
  </div>
  <div class="footer"> </div>
</div>
</body>
</html>
