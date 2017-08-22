// JavaScript Document
 $(document).ready(function(e) {
        $('.li').click(function(e) {
			$(this).addClass("li_add").siblings().removeClass("li_add").children('.floor2').css("display","block");
			  $(this).children('.floor2').css("display","none");
			var Index = $(this).index();
			$('.cherix').eq(Index).show().siblings().hide(); 
           
        });
		$('.back').mouseenter(function(e) {
           $(this).addClass('back_add');
        });
		 $('.back').mouseleave(function(e) {
            $(this).removeClass('back_add');
        }); 
    });