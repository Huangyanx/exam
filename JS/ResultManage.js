// JavaScript Document
 $(document).ready(function(e) { //��������
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
	  $('.input5').blur(function(e) { //blur�¼����滻�Ƿ��ַ�
		 var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    
    });
	$('.input5').keyup(function(e) { //keyup�¼����滻�Ƿ��ַ�
	  var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	$('.input5').keydown(function(e) { //keydown�¼����滻�Ƿ��ַ�;
	   var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	  $('#span3').blur(function(e) { //blur�¼����滻�Ƿ��ַ�
		 var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	$('#span3').keyup(function(e) { //keyup�¼����滻�Ƿ��ַ�
	    var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	$('#span3').keydown(function(e) { //keydown�¼����滻�Ƿ��ַ�
	 var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	  $('#span6').blur(function(e) { //blur�¼����滻�Ƿ��ַ�;
		   var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	$('#span6').keyup(function(e) { //keyup�¼����滻�Ƿ��ַ�
	  var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
	$('#span6').keydown(function(e) { //keydown�¼����滻�Ƿ��ַ�
	   var v1 = $(this).val().replace(/\D/g,'');
		 $(this).val(v1);
    });
     $('.jisuan').mouseenter(function(e) {
        $(this).css("font-size","20px");
    });
	 $('.jisuan').mouseleave(function(e) {
        $(this).css("font-size","18px");
    });
	$('.jisuan').click(function(e) { //��gongshi_box���ӡ�
         $('.gongshi_box').show();
    });
	$('#queren').click(function(e) { 
        $('.gongshi_box').hide();//�ر�gongshi_box���ӡ�
 
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
				 if(v1 && v2){ //���ƽʱ�ͻ���ͬʱ�ǿգ���trִ���ܳɼ�����
					  var num = parseInt(sum);
					  ((sum - num) >= 0.5) ? $(this).find('.td6input').val(num + 1) :$(this).find('.td6input').val(num ); //����������жϼ����
					  
					 };	 
                }); 
				
				$('.cc').prop('checked',''); //����������tr��background-color��
			  var prop = $('.cc').prop('checked');
				prop ? $('.c').prop('checked','checked').parents('tr').css('background-color','#F2F2F2') : $('.c').prop('checked','').parents('tr').css('background-color','');
				
            });
			
			 
        });
		
		 $(document).ready(function(e) { //�������Ȩ��
			   $('#submit').click(function(e) {
                var _zhanghao = $('#inputs').val();
			    var _mima = $('#inputss').val();
                var zhanghao = $('#zhanghao').val();
		    	var mima =	$('#mima').val();
				if(_zhanghao == zhanghao && mima == _mima){$('.h_font').text("Ȩ���Ѿ�����");
				  a = window.setInterval(f,1000);
				};
            });
			  function f(){
				 $('.td5input').attr('readonly',false); 
				 $('.td4input').attr('readonly',false); 
				  };
			$('#back').click(function(e) { //�رս���Ȩ�޺��ӣ��ָ���ʾ$('.baocun')
                $('.houmen').hide();
				 $('.baocun').show();
            });
			
			 
            });
			
			$(document).ready(function(e) {
                    $('.message_f2 table tr').mouseenter(function(e) {  //����ƶ�ʱ���ı�tr��background-color;��ѡ�У��򲻸ı�tr�ı�����ɫ
					var prop = $(this).find('.c').prop('checked');  
				    if(!prop){$(this).css('background-color','#F2F2F2');};	  
                }).mouseleave(function(e) {
                   var prop = $(this).find('.c').prop('checked');
				    if(!prop){$(this).css('background-color','');};	
                });
				
				$('.cc').change(function(e) {
                    var prop = $(this).prop('checked');
					prop ? $('.td4input').attr('readonly',false) : $('.td4input').attr('readonly',true);
					prop ? $('.c').prop('checked','checked').parents('tr').css('background-color','#F2F2F2') : $('.c').prop('checked','').parents('tr').css('background-color',''); //�򹳼��ı�tr��background-color��
                });
				 $('.c').change(function(e) { //��ȡtr��length���ж�ȫѡ���Ƿ�򹳡�
				   var length = $('.c').length;
				   var i = 0;
				   var a = 0;
                 $('.c').each(function(index, element) {
                    var prop = $(this).prop('checked');
					prop ?��$(this).parents('tr').css('background-color','#F2F2F2') : $(this).parents('tr').css('background-color','');//�ı�ѡ�е�tr��background-color��
					prop ? i = i + 1 : a = a;
                });
				i == length ? $('.cc').prop('checked','checked') : $('.cc').prop('checked',''); 
				
            });
			
			  $('.c').change(function(e) { //����tdrinput��Ȩ��
				  var prop = $(this).prop('checked');
				  prop ? $(this).parents('tr').find('.td4input').attr('readonly',false) : $(this).parents('tr').find('.td4input').attr('readonly',true);     
            });
			
			$('.ccc').click(function(e) {
                $(this).parents('tr').find('.c').prop('checked','checked'); //ѡ�и�tr���򹳣�
				$(this).parents('tr').find('.td4input').attr('readonly',false);//������tr��td4input��Ȩ�ޣ�
            });
                });
				
				$(document).ready(function(e) { //����input��ֻ��������������
              $('.td4input').keyup(function(e) { //keyup�¼����滻�Ƿ��ַ�
	            var v1 = $(this).val().replace(/\D/g,'');
		        $(this).val(v1);
                            });
	          $('.td4input').keydown(function(e) { //keydown�¼����滻�Ƿ��ַ�;
	            var v1 = $(this).val().replace(/\D/g,'');
	        	 $(this).val(v1);
                });
	          $('.td4input').blur(function(e) { //blur�¼����滻�Ƿ��ַ�
	        	 var v1 = $(this).val().replace(/\D/g,'');
		         $(this).val(v1);
               });
                });

 $(document).ready(function(e) {
            $('.jiesuo').mouseenter(function(e) { //��DIV���ƶ����ı�������ɫ
                $(this).css('color','#F00');
            }).mouseleave(function(e) {
                $(this).css('color','#000');
            });
			
			$('.jiesuo').click(function(e) {
                $('.houmen').show();
				$('.baocun').hide();
            });
			
			
        });