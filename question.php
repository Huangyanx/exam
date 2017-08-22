
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/QuestionManage.css" type="text/css" media="all"  rel="stylesheet" />
<title>题目管理页面</title>
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript"  src="JS/QuestionManage.js"></script>
<script type="text/javascript">
 function sent(){
	 document.getElementByIdx_x('myform').submit();//提交表单
} 
</script>
</head>
<body>
<div id="all">
<div class="banner">
  <div class="banner_f1">
    <div class="banner_font"><strong>网上考试系统后台</strong></div>
  </div>
  <div class="banner_f2"></div>
  <div class="banner_f3"></div>
  <div class="banner_f4"></div>
</div>
<div class="main">
  <div class="main_font">教师管理系统</div>
  <div class="clear"></div>
  <div class="f1">
    <form action="shanchuprocess.php" id="myform">
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
      <select id="s3" class="sele">
        <option value="请选择">--请选择--</option>
        <option>信计</option>
        <option>统计</option>
        <option>数本</option>
      </select>
      <select id="s4" class="sele">
        <option value="请选择">--请选择--</option>
        <option>烹饪</option>
        <option>园林</option>
        <option>生物</option>
      </select>
      <select id="s5" class="sele">
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
  <div class="clear"></div>
  <div class="fl2">
    <div class="fl2_left">
      <ul class="ul">
        <li class="blank"></li>
        <li class="z"><a href="resultmanage.php">成绩管理</a></li>
        <li class="z"><a href="studentmanage.php">考生管理</a></li>
        <li class="z"><a href="question.php">题库管理</a></li>
      </ul>
    </div>
    <div class="fl2_right">
      <table class="table1" >
        <tr>
          <td class="td1"><input type="checkbox" class="all_checked" />
            &nbsp;&nbsp;全选</td>
          <td class="td2">单项选择题</td>
          <td class="td3">多项选择题</td>
        </tr>
      </table>
      <table class="table2">
        <tr>
          <td class="tds1">&nbsp;&nbsp;</td>
          <td class="tds2">题目</td>
          <td class="tds3">答案</td>
          <td class="tds4">正确答案</td>
          <td class="tds5">操作</td>
        </tr>
      </table>
      <div class="table_content">
        <table class="table3">
        <?php 
        include 'conn.php';
        $sql = "select * from exam where type='single'";
        
        $result = mysql_query($sql);
        
        $numbers = mysql_num_rows($result);    //得到结果集的rows
        $page_size=4;
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
        
        
        $offset=$page_size*($page-1);
        $query="select * from exam limit $offset,$page_size";
        $result=mysql_query($query);
        if($result==true){
        	while(@$myrow=mysql_fetch_array($result)){
				$xuanxiang=$myrow["answer"];
        ?>
          <tr class="tr">
            <td class="tdss1"><input type="checkbox" class="checked" name="all[]" /></td>
            <td class="tdss2"><?php echo $myrow["question"];?></td>
            <td class="tdss3"><?php echo $myrow["A"].";".$myrow["B"].";".$myrow["C"].";".$myrow["D"];?></td>
            <td class="tdss4"><?php echo $myrow[$xuanxiang];?></td>
            <td class="tdss5"><a href="changequestion.php?id=<?php echo $myrow['id'];?>" class="change">修改</a>|<a href="checksubject.php?id=<?php echo $myrow['id'];?>">查看</a></td>
          </tr>
          <?php }
				} ?> 
        </table>
      </div>
      <table class="table4">
        <tr>
        <?php 
       				
       				if($page!=1){?>
						<td class="tdsss1">
					 
						<a href="question.php?page=1">首页</a> 
						</td>
						<td class="tdsss2">
						<a href="question.php?page=<?php echo ($page-1);?>">上一页</a></td>
						<?php }else {?> 
						<td class="tdsss1">首页</td> 
						<td class="tdsss2">上一页</td>
						<?php }
						
						if($page!=$lastpage){?>
						<td class="tdsss3">
						<a href="question.php?page=<?php echo ($page+1); ?>">下一页</a> </td>
						<td class="tdsss4">
						<a href="question.php?page=<?php echo $lastpage;?>">末页</a></td>
						<?php }else {?>
							<td class="tdsss3">下一页 </td>
							<td class="tdsss4">末页</td>
						<?php }?>
						
						<td class="tdsss5">共</td>
               <td class="tdsss6"> <?php echo $page_size;?></td>
                <td class="tdsss7">条记录</td>
                <td class="tdsss8">当前第</td>
                <td class="tdsss9"><?php echo $page;?> </td>
                <td class="tdsss10">页</td>

        </tr>
      </table>
      <div class="add"><a href="additem.php"><img src="images/tianjia.gif"  id="add"/></a></div>
      <div class="dele"><a href="#"><img src="images/shanchu.gif" id="dele" /></a></div>
    </div>
    <div class="fl2_rights">
      <table class="table1" >
        <tr>
          <td class="td1"><input type="checkbox" class="all_checkeds" />
            &nbsp;&nbsp;全选</td>
          <td class="td2s">单项选择题</td>
          <td class="td3s">多项选择题</td>
        </tr>
      </table>
      <table class="table2">
        <tr>
          <td class="tds1">&nbsp;&nbsp;</td>
          <td class="tds2">题目</td>
          <td class="tds3">答案</td>
          <td class="tds4">正确答案</td>
          <td class="tds5">操作</td>
        </tr>
      </table>
      <div class="table_content">
        <table class="table3">
        
        <?php 
        include 'conn.php';
        $sql = "select * from exam where type='multiple'";
        
        $result = mysql_query($sql);
        
        $sumnumbers = mysql_num_rows($result);    //得到结果集的rows
        $pagesize=4;
        $page_num=ceil($sumnumbers/$pagesize);//页数，ceil返回大于或者等于指定表达式的最小整数
        	
        //判断当前页码
        if (isset($_GET['pages']))
        {
        	$pages = intval($_GET['pages']);
        }
        else
        {
        	$pages = 1;        //其他情况，都指向第一页
        }
        
        $endpage=$page_num;
        if ($pages==$endpage) {
        	$pagesize=$sumnumbers%$pagesize;
        }
        
        
        $offset=$numbers+$pagesize*($pages-1);
        $query="select * from exam limit $offset,$pagesize";
        $result=mysql_query($query);
        if($result==true){
        	while(@$myrow=mysql_fetch_array($result)){
				$arr=str_split($myrow["answer"]);
        ?>
          <tr class="tr">
            <td class="tdss1"><input type="checkbox" class="checked" name="all[]" /></td>
            <td class="tdss2"><?php echo $myrow["question"];?></td>
            <td class="tdss3"><?php echo $myrow["A"].";".$myrow["B"].";".$myrow["C"].";".$myrow["D"];?></td>
            <td class="tdss4"><?php foreach ($arr as $value){ echo $myrow[$value]."；";}?></td>
            <td class="tdss5"><a href="changequestion.php?id=<?php echo $myrow['id'];?>" class="change">修改</a>|<a href="checksubject.php?id=<?php echo $myrow['id'];?>">查看</a></td>
          </tr>
          <?php }
				} ?> 
        </table>
      </div>
      <table class="table4">
        <tr>
        <?php 
       				
       				if($pages!=1){?>
						<td class="tdsss1">
					 
						<a href="question.php?page=1">首页</a> 
						</td>
						<td class="tdsss2">
						<a href="question.php?page=<?php echo ($pages-1);?>">上一页</a></td>
						<?php }else {?> 
						<td class="tdsss1">首页</td> 
						<td class="tdsss2">上一页</td>
						<?php }
						
						if($pages!=$endpage){?>
						<td class="tdsss3">
						<a href="question.php?page=<?php echo ($pages+1); ?>">下一页</a> </td>
						<td class="tdsss4">
						<a href="question.php?page=<?php echo $lastpage;?>">末页</a></td>
						<?php }else {?>
							<td class="tdsss3">下一页 </td>
							<td class="tdsss4">末页</td>
						<?php }?>
						
						<td class="tdsss5">共</td>
               <td class="tdsss6"> <?php echo $pagesize;?></td>
                <td class="tdsss7">条记录</td>
                <td class="tdsss8">当前第</td>
                <td class="tdsss9"><?php echo $pages;?> </td>
                <td class="tdsss10">页</td>

        	</tr>
        
      </table>
      <div class="add"><a href="additem.php"><img src="images/tianjia.gif"  id="add"/></a></div>
      <div class="dele"><!--  <a href="#"><img src="images/shanchu.gif" id="dele" /></a>-->
      	<input type="image" src="images/tianjia.gif" onclick="sent()"/>
      </div>
    </div>
  </div>
  <div class="footer"> </div>
</div>
</body>
</html>
