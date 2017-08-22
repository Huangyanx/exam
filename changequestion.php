
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>题目管理</title>
<link href="style/tikuguanli.css" type="text/css" media="all" rel="stylesheet" />
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/AddItem.js"></script>

<script type="text/javascript">
 function sent(){
	 document.getElementByIdx_x("myform").submit();//提交表单
} 
</script>
</head>

<body
ondragstart="return false" draggable="return false"  
        ondragenter="return false"  
        ondragover="return false"  
        ondrop="return false"
        >
        
        <?php 
        include 'conn.php';
        $id=$_GET["id"];
        $query="select * from exam where id='$id'";
        $result=mysql_query($query);
        $row=mysql_fetch_array($result);
        $type=$row["type"];
        ?>
<div id="all">
  <div class="banner">
    <div class="banner_f1">
      <div class="banner_font"><strong>网上考试系统后台</strong></div>
    </div>
    <div class="banner_f2"></div>
    <div class="banner_f3"></div>
    <div class="banner_f4"></div>
  </div>
  <div class="layout">
    <div class="box1">题库管理</div>
    <div class="box2">
    <form action="changequestionprocess.php" name="myform">
      <div class="box2_topic">修改题目</div>
      <div class="timu_content">
        <div class="timu_font">题目：</div>
        <div class="timu">
          <textarea name="question"><?php echo $row["question"];?></textarea>
        </div>
      </div>
      <div class="xuanxiang_content">
        <div class="xuanxiang_font">选项：</div>
        <div class="xuanxiang">
          <table >
            <tr>
              <td><input type="radio" name="r" <?php if ($type=="single") {
              	echo 'checked="checked"';
              }?> id="radio_single" class="rad" /></td>
              <td>单选</td>
              <td><input type="radio" name="r" <?php if ($type=="multiple") {
              	echo 'checked="checked"';
              }?> id="radio_manny" class="rad"  /></td>
              <td>多选</td>
            </tr>
          </table>
        </div>
        <div class="choose">
          <table class="table2" style=" display:none">
            <tr>
              <td class="radio"><input type="checkbox" class="c" />
                &nbsp;</td>
              <td>A&nbsp;
                <input type="text" name="a" class="a s" value="<?php echo $row['A'];?>"  /></td>
            </tr>
            <tr>
              <td class="radio"><input  type="checkbox"  class="c"  />
                &nbsp;</td>
              <td>B&nbsp;
                <input type="text" name="b" class="b s" value="<?php echo $row['B'];?>" /></td>
            </tr>
            <tr>
              <td class="radio"><input  type="checkbox"  class="c"   />
                &nbsp;</td>
              <td  >C&nbsp;
                <input type="text" name="c" class="c s" value="<?php echo $row['C'];?>"   /></td>
            </tr>
            <tr>
              <td class="radio"><input  type="checkbox"  class="c"   />
                &nbsp;</td>
              <td >D&nbsp;
                <input type="text" name="d" class="d s" value="<?php echo $row['D'];?>"  /></td>
            </tr>
            <tr>
              <td class="radio"><input  type="checkbox"  class="c"   />
                &nbsp;</td>
              <td >E&nbsp;
                <input type="text" class="d s" name="e" value="<?php echo $row['E'];?>"  /></td>
            </tr>
            <tr>
              <td class="radio"><input  type="checkbox"  class="c"  />
                &nbsp;</td>
              <td >F&nbsp;
                <input type="text" class="d s" name="f" value="<?php echo $row['F'];?>" /></td>
            </tr>
          </table>
          <table class="table1">
            <tr>
              <td class="radio"><input type="radio" name="radio" class="r" />
                &nbsp;</td>
              <td>A&nbsp;
                <input type="text" name="a" class="a ss" value="<?php echo $row['A'];?>"   /></td>
            </tr>
            <tr>
              <td class="radio"><input type="radio" name="radio" class="r" />
                &nbsp;</td>
              <td>B&nbsp;
                <input type="text" name="b" class="b ss" value="<?php echo $row['B'];?>"  /></td>
            </tr>
            <tr>
              <td class="radio"><input type="radio" name="radio" class="r" />
                &nbsp;</td>
              <td  >C&nbsp;
                <input type="text" name="c" class="c ss" value="<?php echo $row['C'];?>"  /></td>
            </tr>
            <tr>
              <td class="radio"><input type="radio" name="radio" class="r" />
                &nbsp;</td>
              <td >D&nbsp;
                <input type="text" name="d" class="d ss"  value="<?php echo $row['D'];?>"  /></td>
            </tr>
          </table>
        </div>
        <div class="answer answer1" style="width:550px;">
        <?php 
          $arr=str_split($row["answer"]);
          foreach ($arr as $value){ echo $row[$value]."；";}
          ?>
          
        </div>
        <div class="answer answer2" style="float:left; width:550px; display:none">
          <?php 
          $ans=$row["answer"];
          echo $row[$ans];
          ?>
           
        </div>
      </div>
      </form>
    </div>
    <div class="box3">
      <div class="queren">
      <input type="image" src="images/queren.gif" id="queren" onclick="sent()"/>
      </div>
      <div class="fanhui"><a href="question.php"><img src="images/fanhui.gif" id="fanhui" /></a></div>
    </div>
  </div>
  <div class="footer"> </div>
</div>
</body>
</html>
