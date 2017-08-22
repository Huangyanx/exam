
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>成绩管理页面</title>
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
    <div class="main_font">成绩管理</div>
    <div class="clear"></div>
    <div class="f1">
       <form action="baocun" id="myform">
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
          <li class="jisuan">成绩公式</li>
        </ul>
      </div>

      <div class="f2_r">
        
       
        <div class="gongshi_box">
          <div class="gongshi"> <span class="span1">总分=</span> <span class="span2">平时成绩*</span> <span class="span3">
            <input type="text"  id="span3" value="40" maxlength="3"/>
            %</span> <span class="span4">&nbsp;&nbsp;+</span> <span class="span5">&nbsp;&nbsp;机考成绩*</span> <span class="span6">
            <input type="text"  id="span6" value="60" maxlength="3"/>
            %</span> </div>
          <div class="clear"></div>
          <div class="queren"><img src="images/queren.gif"  id="queren"/></div>
        </div>
        <div class="houmen">
           <div class="h_font">最高权限解锁</div>
           <table class="h_table">
             <tr><td id="td1">账号：</td><td class="inputs"><input type="text" id="inputs" maxlength="6" /></td><td id="tishi1">&nbsp;请输入6位有效字符</td></tr>
             <tr><td id="td2">密码：</td><td class="inputss"><input type="password" id="inputss" maxlength="6" /></td><td id="tishi2">&nbsp;请输入6位有效字符</td></tr>
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
                 <tr><td class="td1"><input type="checkbox" class="cc" />&nbsp;全选</td><td class="td2">姓名</td><td class="td3">学号</td><td class="td4">平时</td><td class="td5">机考</td><td class="td6">总分</td><td class="td7">院系班级</td><td class="td8">操作</td></tr>
                 
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
				<td class="td8"><a  class="ccc">修改</a>|<a href="teachermark.php?id=<?php echo $myrow["id"];?>">留言</a></td>
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
					 
						<a href="resultmanage.php?page=1">首页</a> 
						</div>
						<div class="span_2">
						<a href="resultmanage.php?page=<?php echo ($page-1);?>">上一页</a></div>
						<?php }else {?> 
						<div class="span_1">首页</div>  
						<div class="span_2">上一页</div>
						<?php }
						
						if($page!=$lastpage){?>
						<div class="span_3">
						<a href="resultmanage.php?page=<?php echo ($page+1); ?>">下一页</a> </div>
						<div class="span_4">
						<a href="resultmanage.php?page=<?php echo $lastpage;?>">末页</a></div>
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
       <div class="jiesuo">解锁权限</div>
       
    </div>
  </div>
  <div class="footer"> </div>
</div>
</body>
</html>

      