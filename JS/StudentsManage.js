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
                 $('.message_f2 table tr').mouseenter(function(e) {  //鼠标移动时，改变tr的background-color;
					var prop = $(this).find('.c').prop('checked');  
				    if(!prop){$(this).css('background-color','#F2F2F2');};	  
                }).mouseleave(function(e) {
                   var prop = $(this).find('.c').prop('checked');
				    if(!prop){$(this).css('background-color','');};	
                });
				
				$('.cc').change(function(e) {
                    var prop = $(this).prop('checked');
					prop ? $('.c').prop('checked','checked').parents('tr').css('background-color','#F2F2F2') : $('.c').prop('checked','').parents('tr').css('background-color','');
                });
				
				 $('.c').change(function(e) {
				   var length = $('.c').length;
				   var i = 0;
				   var a = 0;
                 $('.c').each(function(index, element) {
                    var prop = $(this).prop('checked');
					prop ?　$(this).parents('tr').css('background-color','#F2F2F2') : $(this).parents('tr').css('background-color','');
					prop ? i = i + 1 : a = a;
                });
				i == length ? $('.cc').prop('checked','checked') : $('.cc').prop('checked','');
				
            });
            });