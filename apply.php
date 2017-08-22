
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/Apply.css" type="text/css" media="all" rel="stylesheet" />
<title>报名页面</title>
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/Apply.js"></script>
<script type="text/javascript">
 function sent(){
	 document.getElementByIdx_x('myform').submit();//提交表单
} 
</script>

</head>
<body
ondragstart="return false" draggable="return false"  
        ondragenter="return false"  
        ondragover="return false"  
        ondrop="return false"
        onpaste="return false" >
<!--防止张贴，拖拉，复制等等 -->
        <?php 
        session_start();
        if (isset($_SESSION["destination"])){
			$destination=$_SESSION["destination"];
			}
        ?>
<div id="all">
  <div class="banner">
    <div class="banner_img"><img src="images/zhanshi_banner.gif" id="banner_img" /></div>
    <div class="banner_font">网上考试系统报名</div>
  </div>
  <div class="main">
    <div class="main_left">
      <div class="ml_f1">
        <div class="ml_f1_banner1"><img src="images/003.gif" id="ml_f1_banner1" /></div>
        <div class="ml_f1_banner2"><img src="images/004.gif" id="ml_f1_banner2" /></div>
        <div class="ml_f1_font">
          <div class="ml_f1_font1">各位考生：</div>
          <div class="clear"></div>
          <div class="ml_f1_font2">此次网上考试，报名后，准考证就是学号，准考证号由老师统一打印，望各位考生遵守考试规则。</div>
          <div class="clear"></div>
          <div class="ml_f1_font3">报考时间：7月12号到8月15号</div>
        </div>
      </div>
      <div class="ml_f2">
        <div class="hr1"></div>
        <div class="hr2"></div>
        <div class="ml_f2_img"><img src="images/007.gif" id="ml_f2_img" /></div>
      </div>
    </div>
    <div class="main_right">
    	<form enctype="multipart/form-data" action="upphoto.php" method="post" id="myform">
      <div class="box">
        <div class="box_f1">考生报名</div>
        <div class="box_f2">
          <div class="box_f2_left">
            <div class="box_f2_left1">
              <div class="line_left">姓名：</div>
              <div class="line_right">
                <input type="text" id="input1" name="username" maxlength="4" />
              </div>
            </div>
            <div class="box_f2_left2">
              <div class="line_left">性别：</div>
              <div class="line_right"> <span class="span1">
                <input type="radio" class="input2" name="sex" />
                </span> <span class="span2">男</span> <span class="span3">
                <input type="radio" class="input3" name="sex" />
                </span> <span class="span4">女</span> </div>
            </div>
          </div>
          <div id="preview"> 
          <?php 
          if (isset($_SESSION["destination"])){
			echo "<img src=\"".$destination."\" width=123"
			." height=148";
			unset($_SESSION["destination"]);
			}
          ?>
          
          </div>
        </div>
        <div class="box_f3">
          <div class="box_f3_1">
            <div class="line_left">院系：</div>
            <div class="line_right">
              <select id="s1" name="xueyuan" >
                <option value="请选择">--请选择--</option>
                <option class="sss" value="数计院" >数计院</option>
                <option class="sss"  value="生科院" >生科院</option>
                <option class="sss"  value="化学院" >化学院</option>
              </select>
            </div>
          </div>
          <div class="box_f3_2">
            <div class="line_left">班级：</div>
            <div class="line_right">
              
              
              
              <select  id="s2" class="sele">
        <option >--请选择--</option>
      </select>
      <select id="s3" class="sele" style="display:none" name="banji">
        <option value="请选择">--请选择--</option>
        <option>信计</option>
        <option>统计</option>
        <option>数本</option>
      </select>
      <select id="s4" class="sele" style="display:none"name="banji">
        <option value="请选择">--请选择--</option>
        <option>烹饪</option>
        <option>园林</option>
        <option>生物</option>
      </select>
      <select id="s5" class="sele" name="banji" style="display:none">
        <option value="请选择">--请选择--</option>
        <option>化本</option>
        <option>检测</option>
        <option>制药</option>
      </select>
            </div>
          </div>
          <div class="box_f3_4">
            <input type="file" onchange="previewImage(this)" id="input9" name="upfile" value="预览" />
          </div>
          <div class="box_f3_5">
          	<input type="submit" value="上传相片" name="submit1" id="submit1"/>
          </div>
        </div>
        <div class="box_f4">
          <div class="box_f4_1">
            <div class="line_left">学号：</div>
            <div class="line_right">
              <input type="text" id="input10" maxlength="10" name="studentnum"  />
            </div>
          </div>
          <div class="box_f4_2">
            <div class="line_left1">身份证号：</div>
            <div class="line_right">
              <input type="text" id="input11" maxlength="18" name="ID" />
            </div>
          </div>
        </div>
        <div class="box_f5">
          <div class="queren">
            <input type="image" src="images/queren.gif" id="queren" onclick="sent()" />
           <!-- <input type="submit" name="submit2" id="submit2" style="background:url(images/queren.gif)" value=""/> -->  
          </div>
          <div class="fanhui"><a href="back.php"><img src="images/fanhui.gif" id="fanhui" /></a></div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
