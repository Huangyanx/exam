
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<script language="javascript">
function printdiv(printpage){
	var headstr="<html><head><title></title></head><body>";
	var footstr="</body>";
	var newstr=document.all.item(printpage).innerHTML;
	var oldstr=document.body.innerHTML;
	document.body.innerHTML=headstr+newstr+footstr;
	window.print(); 
	document.body.innerHTML=oldstr;
	return false;
}
</script>
<title>打印准考证</title>
<link rel="stylesheet" href="style/zhunkaozheng.css" media="all" type="text/css" />
</head>

<body>
<div class="container">
<div class="box">湛江师范学院数计学院大学计算机文化基础统一考试准考证第一批</div>
<div id="div_print">
<div class="box1">
  <div class="box1son1">
    <div class="text1">湛江师范学院数计学院大学计算机文化基础统一考试</div>
    <div class="text2">准考证</div>
    <div class="font1">
      <ul>
        <li>院系：数学与计算科学学院</li>
        <li>姓名：张三</li>
        <li>准考证号：2012234130</li>
        <li>身份证号：123456688</li>
        <li>性别：男</li>
        <li>考试时间：2014年9月20号下午3:00</li>
        <li>考场：综A203</li>
      </ul>
    </div>
    <div class="pic1"><img class="pic2" src="images/pic11.jpg" /></div>
    <div class="text3"> <span>注意事项：</span>
      <ul>
        <li>1、</li>
        <li>2、</li>
        <li>3、</li>
        <li>4、</li>
        <li>5、</li>
      </ul>
    </div>
  </div>
  <div class="box1son2">
    <div class="text1">湛江师范学院数计学院大学计算机文化基础统一考试</div>
    <div class="text2">准考证</div>
    <div class="font1">
      <ul>
        <li>院系：数学与计算科学学院</li>
        <li>姓名：张三</li>
        <li>准考证号：2012234130</li>
        <li>身份证号：123456688</li>
        <li>性别：男</li>
        <li>考试时间：2014年9月20号下午3:00</li>
        <li>考场：综A203</li>
      </ul>
    </div>
    <div class="pic1"><img class="pic2" src="images/pic11.jpg" /></div>
    <div class="text3"> <span>注意事项：</span>
      <ul>
        <li>1、</li>
        <li>2、</li>
        <li>3、</li>
        <li>4、</li>
        <li>5、</li>
      </ul>
    </div>
  </div>
</div>
<div class="box2">
  <div class="box1son1">
    <div class="text1">湛江师范学院数计学院大学计算机文化基础统一考试</div>
    <div class="text2">准考证</div>
    <div class="font1">
      <ul>
        <li>院系：数学与计算科学学院</li>
        <li>姓名：张三</li>
        <li>准考证号：2012234130</li>
        <li>身份证号：123456688</li>
        <li>性别：男</li>
        <li>考试时间：2014年9月20号下午3:00</li>
        <li>考场：综A203</li>
      </ul>
    </div>
    <div class="pic1"><img class="pic2" src="images/pic11.jpg" /></div>
    <div class="text3"> <span>注意事项：</span>
      <ul>
        <li>1、</li>
        <li>2、</li>
        <li>3、</li>
        <li>4、</li>
        <li>5、</li>
      </ul>
    </div>
  </div>
  <div class="box1son2">
    <div class="text1">湛江师范学院数计学院大学计算机文化基础统一考试</div>
    <div class="text2">准考证</div>
    <div class="font1">
      <ul>
        <li>院系：数学与计算科学学院</li>
        <li>姓名：张三</li>
        <li>准考证号：2012234130</li>
        <li>身份证号：123456688</li>
        <li>性别：男</li>
        <li>考试时间：2014年9月20号下午3:00</li>
        <li>考场：综A203</li>
      </ul>
    </div>
    <div class="pic1"><img class="pic2" src="images/pic11.jpg" /></div>
    <div class="text3"> <span>注意事项：</span>
      <ul>
        <li>1、</li>
        <li>2、</li>
        <li>3、</li>
        <li>4、</li>
        <li>5、</li>
      </ul>
    </div>
  </div>
  <div class="clear"></div>
  <div class="message_f3">
    <div class="span_ul">
      <div class="span_1"><a href="#">首页</a></div>
      <div class="span_2"><a href="#">上一页</a></div>
      <div class="span_3"><a href="#">下一页</a></div>
      <div class="span_4"><a href="#">末页</a></div>
      <div class="span_5">共</div>
      <div class="span_6"></div>
      <div class="span_7">条记录</div>
      <div class="span_8">当前第</div>
      <div class="span_9"></div>
      <div class="span_10">页</div>
    </div>
  </div>
  </div>
  <div class="dayin">
    <input class="button1"  type="button" value="打印" onclick="printdiv('div_print');"/>
  </div>
  <div class="back"><a href="studentmanage.php"><img src="images/fanhui.gif" id="back" /></a></div>
</div>
</body>
</html>
