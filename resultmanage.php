
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ɼ�����ҳ��</title>
<link href="style/ResultManage.css" type="text/css" media="all" rel="stylesheet" />
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/ResultManage.js"></script>
<script type="text/javascript">
function jisuan(){
	var g=document.getElementById("usual[]");
	var h=document.getElementById("mach[]");
	var k=document.getElementById("sum[]");
	for(var $i=0;$i<g.length;$i++){
		var a=parseInt(g["$i"].value);
		var b=parseInt(h["$i"].value);
		k["$i"].value=(0.4*a + 0.6*b);
	}
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
    <div class="main_font">�ɼ�����</div>
    <div class="clear"></div>
    <div class="f1">
       <form action="baocun" id="myform">
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
          <li class="jisuan">�ɼ���ʽ</li>
        </ul>
      </div>

      <div class="f2_r">
        
       
        <div class="gongshi_box">
          <div class="gongshi"> <span class="span1">�ܷ�=</span> <span class="span2">ƽʱ�ɼ�*</span> <span class="span3">
            <input type="text"  id="span3" value="40" maxlength="3"/>
            %</span> <span class="span4">&nbsp;&nbsp;+</span> <span class="span5">&nbsp;&nbsp;�����ɼ�*</span> <span class="span6">
            <input type="text"  id="span6" value="60" maxlength="3"/>
            %</span> </div>
          <div class="clear"></div>
          <div class="queren"><img src="images/queren.gif"  id="queren"/></div>
        </div>
        <div class="houmen">
           <div class="h_font">���Ȩ�޽���</div>
           <table class="h_table">
             <tr><td id="td1">�˺ţ�</td><td class="inputs"><input type="text" id="inputs" maxlength="6" /></td><td id="tishi1">&nbsp;������6λ��Ч�ַ�</td></tr>
             <tr><td id="td2">���룺</td><td class="inputss"><input type="password" id="inputss" maxlength="6" /></td><td id="tishi2">&nbsp;������6λ��Ч�ַ�</td></tr>
           </table>
           
           <div class="yanzheng" style="width:880; height:30;">
              <input type="text" id="zhanghao" value="123456" style="display:none" />
              <input type="text" id="mima" value="123456" style="display:none" />
           </div>
           <img src="images/fanhui.gif" id="back" />
           <input type="image" src="images/pic1.jpg" id="submit" />
        </div> 
        <!--gongshi_box end-->
         
        <form>
          <div class="message">
            <div class="message_f1">
              <table class="table">
                 <tr><td class="td1"><input type="checkbox" class="cc" />&nbsp;ȫѡ</td><td class="td2">����</td><td class="td3">ѧ��</td><td class="td4">ƽʱ</td><td class="td5">����</td><td class="td6">�ܷ�</td><td class="td7">Ժϵ�༶</td><td class="td8">����</td></tr>
                 
              </table>
              </div>
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
				<td class="td1"><input type="checkbox" class="c" name="all[]" value="<?php echo $myrow['id'];?>"/></td>  
				<td class="td2"><?php echo $myrow["username"];?></td> 
				<td class="td3"><?php echo $myrow["stunumber"];?></td> 
				<td class="td4"><input type="text" class="td4input" name="usual[]" id="usual" value="<?php echo $myrow['usualscore'];?>" readonly="readonly"  maxlength="3" onblur="jisuan()"/></td> 
				<td class="td5"><input type="text" class="td5input" name="mach[]" id="mach" value="<?php echo $myrow['machscore']; ?>" readonly="readonly"  maxlength="3" onblur="jisuan()" /></td>
				<td class="td6"><input type="text" class="td6input" name="sum[]" id="sum" value="<?php echo $myrow['allscore'];?>" readonly="readonly"   maxlength="3"/></td>
				<td class="td7"><?php echo $myrow["xueyuan"].$myrow["major"];?></td>
				<td class="td8"><a  class="ccc">�޸�</a>|<a href="teachermark.php?id=<?php echo $myrow["id"];?>">����</a></td>
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
					 
						<a href="resultmanage.php?page=1">��ҳ</a> 
						</div>
						<div class="span_2">
						<a href="resultmanage.php?page=<?php echo ($page-1);?>">��һҳ</a></div>
						<?php }else {?> 
						<div class="span_1">��ҳ</div>  
						<div class="span_2">��һҳ</div>
						<?php }
						
						if($page!=$lastpage){?>
						<div class="span_3">
						<a href="resultmanage.php?page=<?php echo ($page+1); ?>">��һҳ</a> </div>
						<div class="span_4">
						<a href="resultmanage.php?page=<?php echo $lastpage;?>">ĩҳ</a></div>
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
              <!-- <div class="shanchu"><a href="#"><img src="images/shanchu.gif" id="shanchu" /></a></div>--> 
              <!--<div class="tianjia"><a href="#"><img src="images/tianjia.gif" id="tianjia" /></a></div>
--> </div>
          </div>
        </form>
      </div>
    </div>
    <div class="f3">
      <div class="baocun">
      	<input type="image" src="images/saving.gif" id="baocun"/>
      </div>
      <div class="back6"><a href="index.php"><img src="images/back6.gif" id="back6" /></a></div>
       <div class="jiesuo">����Ȩ��</div>
       
    </div>
  </div>
  <div class="footer"> </div>
</div>
</body>
</html>

      