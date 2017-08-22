// JavaScript Document
 $(document).ready(function(e) {
    $('.td3').click(function(e) {
        $('.fl2_right').hide();
		$('.fl2_rights').show();
    });
	$('.td2s').click(function(e) {
        $('.fl2_rights').hide();
		$('.fl2_right').show();
    });
	$('.td2s').mouseenter(function(e) {
        $(this).css("background-color","#F2F2F2");
    });
	$('.td2s').mouseleave(function(e) {
        $(this).css("background-color","");
    });
});

 $(document).ready(function(e) {
	 
	  var length;
    $('.all_checked').change(function(e) {
        var prop = $(this).prop("checked");
		prop ? $('.checked').prop("checked","checked") : $(".checked").prop("checked","");
    });
	$('.checked').change(function(e) {
		 var i = 0;
		length = $('.checked').length;
        $('.checked').each(function(index, element) {
		  var prop = $('.checked').eq(index).prop('checked');
		  prop ? i = i +1 : i = i + 0;
        });
		(i == length) ? $('.all_checked').prop('checked','checked') : $('.all_checked').prop('checked','');
    });
	//turn ? $('.all_checked').prop("checked","checked") : $('.all_checked').prop("checked","");
	$('.all_checkeds').change(function(e) {
        var prop = $(this).prop("checked");
		prop ? $('.checkeds').prop("checked","checked") : $(".checkeds").prop("checked","");
    });
	$('.checkeds').change(function(e) {
		 var i = 0;
		length = $('.checkeds').length;
        $('.checkeds').each(function(index, element) {
		  var prop = $('.checkeds').eq(index).prop('checked');
		  prop ? i = i +1 : i = i + 0;
        });
		(i == length) ? $('.all_checkeds').prop('checked','checked') : $('.all_checkeds').prop('checked','');
    });
});

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
	 $('.td3').mouseenter(function(e) {	
        $(this).css("background-color","#F2F2F2"); 
    });
	$('.td3').mouseleave(function(e) {
        $(this).css("background-color","");
    });
	 
});

 $(document).ready(function(e) {
                $('.tr').mouseenter(function(e) {
                   var prop = $(this).find('.checked').prop('checked');
					if(!prop){$(this).css('background-color','#F2F2F2');};
                });
				$('.tr').mouseleave(function(e) {
					var prop = $(this).find('.checked').prop('checked');
					if(!prop){$(this).css('background-color','');};
                   
                });
				$('.all_checked').change(function(e) {
                    var prop = $(this).prop('checked');
					prop ? $('.tr').css('background-color','#F2F2F2') : $('.tr').css('background-color','');
                });
				$('.checked').change(function(e) {
                 $(this).prop('checked') ? $(this).parents('.tr').css('background-color','#F2F2F2') : $(this).parents('.tr').css('background-color',''); 
                });
            });
			
			  $(document).ready(function(e) {
                $('.trs').mouseenter(function(e) {
                   var prop = $(this).find('.checkeds').prop('checked');
					if(!prop){$(this).css('background-color','#F2F2F2');};
                });
				$('.trs').mouseleave(function(e) {
					var prop = $(this).find('.checkeds').prop('checked');
					if(!prop){$(this).css('background-color','');};
                   
                });
				$('.all_checkeds').change(function(e) {
                    var prop = $(this).prop('checked');
					prop ? $('.trs').css('background-color','#F2F2F2') : $('.trs').css('background-color','');
                });
				$('.checkeds').change(function(e) {
                 $(this).prop('checked') ? $(this).parents('.trs').css('background-color','#F2F2F2') : $(this).parents('.trs').css('background-color',''); 
                });
            });
			
			 $(document).ready(function(e) {
                $('.change').click(function(e) {
                    $(this).parents('.tr').css('background-color','#F2F2F2').find('.checked').prop('checked','checked');
                });
				 $('.change').click(function(e) {
                    $(this).parents('.trs').css('background-color','#F2F2F2').find('.checkeds').prop('checked','checked');
                });
            });