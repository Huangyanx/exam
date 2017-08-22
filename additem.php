
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>题目管理</title>
<link href="style/tikuguanli.css" type="text/css" media="all" rel="stylesheet" />
<script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
<script type="text/javascript" src="JS/AddItem.js"></script>
</head>

<body
ondragstart="return false" draggable="return false"  
        ondragenter="return false"  
        ondragover="return false"  
        ondrop="return false"
        >
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
      <div class="box2_topic">添加题目</div>
      <div class="timu_content">
        <div class="timu_font">题目：</div>
        <div class="timu">
          <textarea></textarea>
        </div>
      </div>
      <div class="xuanxiang_content">
        <div class="xuanxiang_font">选项：</div>
        <div class="xuanxiang">
          <table >
            <tr>
              <td><input type="radio" name="r" checked="checked" id="radio_single" class="rad" /></td>
              <td>单选</td>
              <td><input type="radio" name="r" id="radio_manny" class="rad"  /></td>
              <td>多选</td>
            </tr>
          </table>
        </div>
        <div class="choose">
          <table class="table2" style=" display:none">
            <tr>
              <td class="radio"><input type="checkbox" class="c"    />
                &nbsp;</td>
              <td>A&nbsp;
                <input type="text" class="a s"   /></td>
            </tr>
            <tr>
              <td class="radio"><input  type="checkbox"  class="c"  />
                &nbsp;</td>
              <td>B&nbsp;
                <input type="text" class="b s"  /></td>
            </tr>
            <tr>
              <td class="radio"><input  type="checkbox"  class="c"   />
                &nbsp;</td>
              <td  >C&nbsp;
                <input type="text" class="c s"   /></td>
            </tr>
            <tr>
              <td class="radio"><input  type="checkbox"  class="c"   />
                &nbsp;</td>
              <td >D&nbsp;
                <input type="text" class="d s"   /></td>
            </tr>
            <tr>
              <td class="radio"><input  type="checkbox"  class="c"   />
                &nbsp;</td>
              <td >E&nbsp;
                <input type="text" class="d s"  /></td>
            </tr>
            <tr>
              <td class="radio"><input  type="checkbox"  class="c"  />
                &nbsp;</td>
              <td >F&nbsp;
                <input type="text" class="d s"  /></td>
            </tr>
          </table>
          <table class="table1">
            <tr>
              <td class="radio"><input type="radio" name="radio" class="r" />
                &nbsp;</td>
              <td>A&nbsp;
                <input type="text" class="a ss"    /></td>
            </tr>
            <tr>
              <td class="radio"><input type="radio" name="radio" class="r" />
                &nbsp;</td>
              <td>B&nbsp;
                <input type="text" class="b ss"   /></td>
            </tr>
            <tr>
              <td class="radio"><input type="radio" name="radio" class="r" />
                &nbsp;</td>
              <td  >C&nbsp;
                <input type="text" class="c ss"   /></td>
            </tr>
            <tr>
              <td class="radio"><input type="radio" name="radio" class="r" />
                &nbsp;</td>
              <td >D&nbsp;
                <input type="text" class="d ss"    /></td>
            </tr>
          </table>
        </div>
        <div class="answer answer1" style="float:left; width:550px;">
           
        </div>
        <div class="answer answer2" style="float:left; width:550px; display:none">
           
        </div>
      </div>
    </div>
    <div class="box3">
      <div class="queren"><a href="#"><img src="images/queren.gif" id="queren" /></a></div>
      <div class="fanhui"><a href="question.php"><img src="images/fanhui.gif" id="fanhui" /></a></div>
    </div>
  </div>
  <div class="footer"> </div>
</div>
</body>
</html>
