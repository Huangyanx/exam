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
	  $('.jisuan').click(function(e) {
        $('.baocun').hide();
    });
	$('.queren').click(function(e) {
        $('.baocun').show();
    });
	  $('.input5').blur(function(e) { //blur事件，替换非法字符
		 var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    
    });
	$('.input5').keyup(function(e) { //keyup事件，替换非法字符
	  var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	$('.input5').keydown(function(e) { //keydown事件，替换非法字符;
	   var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	  $('#span3').blur(function(e) { //blur事件，替换非法字符
		 var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	$('#span3').keyup(function(e) { //keyup事件，替换非法字符
	    var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	$('#span3').keydown(function(e) { //keydown事件，替换非法字符
	 var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	  $('#span6').blur(function(e) { //blur事件，替换非法字符;
		   var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	$('#span6').keyup(function(e) { //keyup事件，替换非法字符
	  var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	$('#span6').keydown(function(e) { //keydown事件，替换非法字符
	   var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
     $('.jisuan').mouseenter(function(e) {
        $(this).css("font-size","20px");
    });
	 $('.jisuan').mouseleave(function(e) {
        $(this).css("font-size","18px");
    });
	$('.jisuan').click(function(e) { //打开gongshi_box盒子。
         $('.gongshi_box').show();
    });
	$('#queren').click(function(e) { 
        $('.gongshi_box').hide();//关闭gongshi_box盒子。
 
    });
	 
 
  $('.cc').change(function(e) {  

    });
});

 $(document).ready(function(e) {
            var pingshi,jikao;
			var _pingshi,_jikao;
			$('.queren').click(function(e) {
                $('.gongshi_box').hide();
				pingshi = $('#span3').val();
				jikao = $('#span6').val();
				$('#span3').val(pingshi);
				$('#span6').val(jikao);
				
            });
			
			$('.baocun').click(function(e) {
				pingshi = $('#span3').val();
				jikao = $('#span6').val();
				_pingshi = pingshi /100;  
				_jikao = jikao / 100;
                $('.message_f2 tr').each(function(index, element) {
                 var v1 =   $(this).find('.td4input').val() ;
				 v1 = parseInt(v1);			 
				 var v2 =	$(this).find('.td5input').val() ;
				 v2 = parseInt(v2); 
				 var sum = (v1 * _pingshi) + (v2 * _jikao);
				 if(v1 && v2){ //如果平时和机考同时非空，该tr执行总成绩计算
					  var num = parseInt(sum);
					  ((sum - num) >= 0.5) ? $(this).find('.td6input').val(num + 1) :$(this).find('.td6input').val(num ); //四舍五入的判断及输出
					  
					 };	 
                }); 
				
				$('.cc').prop('checked',''); //消除钩钩和tr的background-color；
			  var prop = $('.cc').prop('checked');
				prop ? $('.c').prop('checked','checked').parents('tr').css('background-color','#F2F2F2') : $('.c').prop('checked','').parents('tr').css('background-color','');
				
            });
			
			 
        });
		
		 $(document).ready(function(e) { //解锁最高权限
			   $('#submit').click(function(e) {
                var _zhanghao = $('#inputs').val();
			    var _mima = $('#inputss').val();
                var zhanghao = $('#zhanghao').val();
		    	var mima =	$('#mima').val();
				if(_zhanghao == zhanghao && mima == _mima){$('.h_font').text("权限已经解锁");
				  a = window.setInterval(f,1000);
				};
            });
			  function f(){
				 $('.td5input').attr('readonly',false); 
				 $('.td4input').attr('readonly',false); 
				  };
			$('#back').click(function(e) { //关闭解锁权限盒子，恢复显示$('.baocun')
                $('.houmen').hide();
				 $('.baocun').show();
            });
			
			 
            });
			
			$(document).ready(function(e) {
                    $('.message_f2 table tr').mouseenter(function(e) {  //鼠标移动时，改变tr的background-color;若选中，则不改变tr的背景颜色
					var prop = $(this).find('.c').prop('checked');  
				    if(!prop){$(this).css('background-color','#F2F2F2');};	  
                }).mouseleave(function(e) {
                   var prop = $(this).find('.c').prop('checked');
				    if(!prop){$(this).css('background-color','');};	
                });
				
				$('.cc').change(function(e) {
                    var prop = $(this).prop('checked');
					prop ? $('.td4input').attr('readonly',false) : $('.td4input').attr('readonly',true);
					prop ? $('.c').prop('checked','checked').parents('tr').css('background-color','#F2F2F2') : $('.c').prop('checked','').parents('tr').css('background-color',''); //打钩及改变tr的background-color；
                });
				 $('.c').change(function(e) { //获取tr的length，判断全选框是否打钩。
				   var length = $('.c').length;
				   var i = 0;
				   var a = 0;
                 $('.c').each(function(index, element) {
                    var prop = $(this).prop('checked');
					prop ?　$(this).parents('tr').css('background-color','#F2F2F2') : $(this).parents('tr').css('background-color','');//改变选中的tr的background-color；
					prop ? i = i + 1 : a = a;
                });
				i == length ? $('.cc').prop('checked','checked') : $('.cc').prop('checked',''); 
				
            });
			
			  $('.c').change(function(e) { //解锁tdrinput的权限
				  var prop = $(this).prop('checked');
				  prop ? $(this).parents('tr').find('.td4input').attr('readonly',false) : $(this).parents('tr').find('.td4input').attr('readonly',true);     
            });
			
			$('.ccc').click(function(e) {
                $(this).parents('tr').find('.c').prop('checked','checked'); //选中该tr并打钩；
				$(this).parents('tr').find('.td4input').attr('readonly',false);//解锁该tr的td4input的权限；
            });
                });
				
				$(document).ready(function(e) { //限制input框只能输入整数数字
              $('.td4input').keyup(function(e) { //keyup事件，替换非法字符
	            var v1 = $(this).val().replace(/\D/g,'');
		        $(this).val(v1);
                            });
	          $('.td4input').keydown(function(e) { //keydown事件，替换非法字符;
	            var v1 = $(this).val().replace(/\D/g,'');
	        	 $(this).val(v1);
                });
	          $('.td4input').blur(function(e) { //blur事件，替换非法字符
	        	 var v1 = $(this).val().replace(/\D/g,'');
		         $(this).val(v1);
               });
                });

 $(document).ready(function(e) {
            $('.jiesuo').mouseenter(function(e) { //在DIV中移动，改变文字颜色
                $(this).css('color','#F00');
            }).mouseleave(function(e) {
                $(this).css('color','#000');
            });
			
			$('.jiesuo').click(function(e) {
                $('.houmen').show();
				$('.baocun').hide();
            });
			
			
        });