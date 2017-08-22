
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/StudentsManage.css" type="text/css" media="all" rel="stylesheet" />
<title>考生管理</title>
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/StudentsManage.js"></script>
<script type="text/javascript">
 function sent(){
	 document.getElementByIdx_x('myform').submit();//提交表单
} 
</script>
</head>

<body ondragstart="return false" draggable="return false"  
        ondragenter="return false"  
        ondragover="return false"  
        ondrop="return false"
        onpaste="return false"  >
<!--防止张贴，拖拉，复制等等-->
        <?php 
        include 'conn.php';
        $sql = "select * from mastudent";   
        
        $result = mysql_query($sql);
        
        $numbers = mysql_num_rows($result);    //得到结果集的rows
        $page_size=10;
        $page_num=ceil($numbers/$page_size);//页数，ceil返回大于或者等于指定表达式的最小整数
			
			//判断当前页码
		if (isset($_GET['page']))
		    {    
		        $page = intval($_GET['page']);
		    }
		    else
		    {
		        $page = 1;        //其他情况，都指向第一页
		    }
    
			$lastpage=$page_num;
			if ($page==$lastpage) {
				$page_size=$numbers%$page_size;
			} 
        
        ?>
        
        
        
<div id="all">
  <div class="banner">
    <div class="banner_f1">
      <div class="banner_font"><strong>网上考试系统后台</strong></div>
    </div>
    <div class="banner_f2"> </div>
    <div class="banner_f3"></div>
    <div class="banner_f4"></div>
  </div>
  <div class="main">
    <div class="main_font">考生管理</div>
    <div class="clear"></div>
    <div class="f1">
       <form>
      <div class="f1_font">搜索：</div>
      <div class="f1_input">
        <input type="text"  id="f1_input" />
      </div>
      <select id="s1"  >
        <option value="请选择">--请选择--</option>
        <option class="sss" value="数计院" >数计院</option>
        <option class="sss"  value="生科院" >生科院</option>
        <option class="sss"  value="化学院" >化学院</option>
      </select>
      <select  id="s2" class="sele">
        <option >--请选择--</option>
      </select>
      <select id="s3" class="sele" style="display:none">
        <option value="请选择">--请选择--</option>
        <option>信计</option>
        <option>统计</option>
        <option>数本</option>
      </select>
      <select id="s4" class="sele" style="display:none">
        <option value="请选择">--请选择--</option>
        <option>烹饪</option>
        <option>园林</option>
        <option>生物</option>
      </select>
      <select id="s5" class="sele" style="display:none">
        <option value="请选择">--请选择--</option>
        <option>化本</option>
        <option>检测</option>
        <option>制药</option>
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
          <li class="z"><a href="resultmanage.php">成绩管理</a></li>
          <li class="z"><a href="studentmanage.php">考生管理</a></li>
          <li class="z"><a href="question.php">题库管理</a></li>
          <li class="z"><a href="studentlist.php">考生列表</a></li>
          <li class="z"><a href="print.php">打印准考证</a></li>
        </ul>
      </div>
      <div class="f2_r">
        <form action="shanchu.php" id="myfrom">
          <div class="message"> 
            <!-- <div class="message_f1"> <span class="m_f1_span1">
              <input type="checkbox" class="cc" />
              </span> <span class="m_f1_span2">全选</span> <span class="m_f1_span3">ID</span> <span class="m_f1_span4">姓名</span> <span class="m_f1_span5">学号</span> <span class="m_f1_span6">身份证号</span> <span class="m_f1_span7">院系班级</span> <span class="m_f1_span8">操作</span> </div>-->
            <table class="table">
              <tr>
                <td class="td1"><input type="checkbox" class="cc" />
                  全选</td>
                <td class="td2">ID</td>
                <td class="td3">姓名</td>
                <td class="td4">学号</td>
                <td class="td5">身份证号</td>
                <td class="td6">院系班级</td>
                <td class="td7">操作</td>
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
				<td class="td7"><a href="changemassege.php?id=<?php echo $myrow['id'];?>">修改</a>|<a href="studentmassege.php?id=<?php echo $myrow["id"];?>">查看</a></td>
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
					 
						<a href="studentmanage.php?page=1">首页</a> 
						</div>
						<div class="span_2">
						<a href="studentmanage.php?page=<?php echo ($page-1);?>">上一页</a></div>
						<?php }else {?> 
						<div class="span_1">首页</div>  
						<div class="span_2">上一页</div>
						<?php }
						
						if($page!=$lastpage){?>
						<div class="span_3">
						<a href="studentmanage.php?page=<?php echo ($page+1); ?>">下一页</a> </div>
						<div class="span_4">
						<a href="studentmanage.php?page=<?php echo $lastpage;?>">末页</a></div>
						<?php }else {?>
							<div class="span_3">下一页 </div>
							<div class="span_4">末页</div>
						<?php }?>
						
						
						
                
                
                <div class="span_5">共</div>
                <div class="span_6"> <?php echo $page_size;?></div>
                <div class="span_7">条记录</div>
                <div class="span_8">当前第</div>
                <div class="span_9"><?php echo $page;?> </div>
                <div class="span_10">页</div>
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
