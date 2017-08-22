// JavaScript Document
  $(document).ready(function(e) {  
     $('.banner1').mouseenter(function(e) {
       // $(this).css('left',18);
		$(this).css({"left":18,"top":-140});
	  $('#banner1_img').css('width',90);
	  $('.banner1_font').css("font-size",22);
   });
      $('.banner1').mouseleave(function(e) {
		$(this).css({"left":23,"top":-130});
	  $('#banner1_img').css('width',80);
	   $('.banner1_font').css("font-size",18);
   });

     $('.banner2').mouseenter(function(e) {
       // $(this).css('left',-100);
		$(this).css({"left":-100,"top":-80});
	  $('#banner2_img').css('width',90);
	    $('.banner2_font').css("font-size",22);
   });
      $('.banner2').mouseleave(function(e) {
        //$(this).css('left',-95);
		$(this).css({"left":-95,"top":-70});
	  $('#banner2_img').css('width',80);
	    $('.banner2_font').css("font-size",18);
   });

      $('.banner3').mouseenter(function(e) {
        //$(this).css('left',-100);
		$(this).css({"left":-100,"top":40});
	  $('#banner3_img').css('width',90);
	   $('.banner3_font').css("font-size",22);
   });
      $('.banner3').mouseleave(function(e) {
       // $(this).css('left',-95);
		$(this).css({"left":-95,"top":50});
	  $('#banner3_img').css('width',80);
	   $('.banner3_font').css("font-size",18);
   });

      $('.banner4').mouseenter(function(e) {
       // $(this).css('left',18);
		$(this).css({"left":18,"top":140});
	  $('#banner4_img').css('width',90);
	  $('.banner4_font').css("font-size",22);
   });
      $('.banner4').mouseleave(function(e) {
		$(this).css({"left":23,"top":145});  
	  $('#banner4_img').css('width',80);
	  $('.banner4_font').css("font-size",18);
   });

      $('.banner5').mouseenter(function(e) {
       // $(this).css('left',395);
		$(this).css({"left":395,"top":270});
	  $('#banner5_img').css('width',90);
	  $('.banner5_font').css("font-size",22);
   });
      $('.banner5').mouseleave(function(e) {
      //  $(this).css('left',400);
		$(this).css({"left":400,"top":275});
	  $('#banner5_img').css('width',80);
	  $('.banner5_font').css("font-size",18);
   });

      
      $('.banner6').mouseenter(function(e) {
      //  $(this).css('left',395);
		$(this).css({"left":395,"top":130});
	  $('#banner6_img').css('width',80);
	   $('.banner6_font').css("font-size",22);
   });
      $('.banner6').mouseleave(function(e) {
		  $(this).css({"left":400,"top":135});
	  $('#banner6_img').css('width',70);
	   $('.banner6_font').css("font-size",18);
   });
 
  var i = 0;
 a = window.setInterval(f,1000); 
  function f(){  
	   i = (i + 1)%2;
	   if(i == 0){
		   $('.ds3').fadeOut(1000);
		   };
	   if(i == 1){
		   $('.ds3').fadeIn(1000);
		   };
	  };
  $('#input2').blur(function(e) {
	  var str = $(this).val();
	  var str_l = str.length;
	  if( str_l < 2){ $('.no1').show();$('.yes1').hide();};
	  if( str_l >= 2){ $('.no1').hide();$('.yes1').show();};
});

 $('#input2s').blur(function(e) {
	  var str = $(this).val();
	  var str_l = str.length;
	  if( str_l < 6){ $('.no1s').show();$('.yes1s').hide();};
	  if( str_l == 6){ $('.no1s').hide();$('.yes1s').show();};
});

  $('#input1').blur(function(e) {
	  var str = $(this).val();
	  var str_l = str.length;
	  if( str_l < 8){ $('.no').show();$('.yes').hide();};
	  if( str_l == 8){ $('.no').hide();$('.yes').show();};
});

  $('#input1s').blur(function(e) {
	  var str = $(this).val();
	  var str_l = str.length;
	  if( str_l < 2){ $('.nos').show();$('.yess').hide();};
	  if( str_l >= 2){ $('.nos').hide();$('.yess').show();};
});
  
  $('.banner5').click(function(e) {
       $('.denglu').show();
	   $('.denglu1').hide();
	   $('#input1s').val("") ;
	   $('#input2s').val("")  ;
	   $('#input3s').val("") ;
	   $('.yess').hide();
	   $('.nos').hide();
	   $('.yes1s').hide();
	   $('.no1s').hide();
	   
});
   $('.banner6').click(function(e) {
       $('.denglu1').show();
	   $('.denglu').hide();
	   $('#input1').val("")  ;
	   $('#input2').val("")  ;
	   $('#input3').val("")  ;
	   $('.yes').hide();
	   $('.no').hide();
	   $('.yes1').hide();
	   $('.no1').hide();
});
  
});