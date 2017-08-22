// JavaScript Document
 $(document).ready(function(e) { //二级联动
    $('#s1').change(function(e) {
     $('#s1 option').each(function(index, element) {
		 
		 if($(this).prop("selected")){
	   $('.sele').hide();
	   $('.sele').eq(index).show();};
      
    });
    });
});
		
 $(document).ready(function(e) {
    $('.input2').click(function(e) {
        var v = $(this).prop("checked");
		v ? $('.input3').prop("checked","") : $(this).prop("checked","checked"); 
    });
	$('.input3').click(function(e) {
        var v = $(this).prop("checked");
		v ? $('.input2').prop("checked","") : $(this).prop("checked","checked"); 
    });
 
});

 //图片上传预览    IE是用了滤镜。
        function previewImage(file)
        {
          var MAXWIDTH  = 123; 
          var MAXHEIGHT = 148;
          var div = document.getElementById('preview');
          if (file.files && file.files[0])
          {
              div.innerHTML ='<img id=imghead>';
              var img = document.getElementById('imghead');
              img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
              }
              var reader = new FileReader();
              reader.onload = function(evt){img.src = evt.target.result;}
              reader.readAsDataURL(file.files[0]);
          }
          else //兼容IE
          {
            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
            file.select();
            var src = document.selection.createRange().text;
            div.innerHTML = '<img id=imghead>';
            var img = document.getElementById('imghead');
            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
            div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
          }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight )
            {
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;
                
                if( rateWidth > rateHeight )
                {
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else
                {
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }
            
            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        }
		
 $(document).ready(function(e) {
			 $('#input1').keydown(function(e) {
                 var v = $(this).val().replace(/[^\a-zA-Z\u4E00-\u9FA5]/g,'');//只能输入中文和英文；
                 $(this).val(v);
            });
			$('#input1').keyup(function(e) {
                 var v = $(this).val().replace(/[^\a-zA-Z\u4E00-\u9FA5]/g,'');//只能输入中文和英文；
                 $(this).val(v);
            });
			$('#input1').blur(function(e) {
                 var v = $(this).val().replace(/[^\a-zA-Z\u4E00-\u9FA5]/g,'');//只能输入中文和英文；
                 $(this).val(v);
            });
			$('#input10').keyup(function(e) {
                var v = $(this).val().replace(/[^\d]/g,'') ; //只能输入数字；
				$(this).val(v);
            });
			$('#input10').keydown(function(e) {
                var v = $(this).val().replace(/[^\d]/g,'') ;//只能输入数字；
				$(this).val(v);
            });
			$('#input10').blur(function(e) {
                var v = $(this).val().replace(/[^\d]/g,'') ;//只能输入数字；
				$(this).val(v);
            });
			$('#input11').blur(function(e) {
			   var str = $(this).val();
			   if(str.length == 18){ //当字符串达到18位是启动判断语句；
				    var strs = str.substr(0,17);//前17位字符；
					var strss = str.substr(17,18);//第18位字符； 
					var vv = strs.replace(/[^\d]/g,'') ; //只能输入数字；
					var v1 = strss.replace(/[\W]/g,''); //只能输入英文和数字；
					if(v1 == 0){}   // 如果v1 为0 -- 9 的数字，则不替换v1的值；
		       else if(v1 == 1){}
			   else if(v1 == 2){}
			   else if(v1 == 3){}
			   else if(v1 == 4){}
			   else if(v1 == 5){}
			   else if(v1 == 6){}
			   else if(v1 == 7){}
			   else if(v1 == 8){}
			   else if(v1 == 9){} 
			   else if(v1 != "X"){ v1 = "" ;}; //如果v1不等于大写的'X'，则替换该值为空；
					var vvv = vv + v1;
					$(this).val(vvv);
				   };
            });
			$('#input11').keyup(function(e) {
			   var str = $(this).val();
			   if(str.length == 18){ //当字符串达到18位是启动判断语句；
				    var strs = str.substr(0,17);//前17位字符；
					var strss = str.substr(17,18);//第18位字符； 
					var vv = strs.replace(/[^\d]/g,'') ; //只能输入数字；
					var v1 = strss.replace(/[\W]/g,'') ; //只能输入英文和数字；
					if(v1 == 0){}
		       else if(v1 == 1){}
			   else if(v1 == 2){}
			   else if(v1 == 3){}
			   else if(v1 == 4){}
			   else if(v1 == 5){}
			   else if(v1 == 6){}
			   else if(v1 == 7){}
			   else if(v1 == 8){}
			   else if(v1 == 9){} 
			   else if(v1 != "X"){ v1 = "" ;};
					 
					var vvv = vv + v1;
					$(this).val(vvv);
				   };
            });
			$('#input11').keydown(function(e) {      
            });
        });
		
		  $(document).ready(function(e) {
                    $('#input9').change(function(e) {
                        var  v = $(this).val();
						if(v){
							$('<img id="imghead" border=0 src=""   />').appendTo('.preview');
							};
                    });
                });