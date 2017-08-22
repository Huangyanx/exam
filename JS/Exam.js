// JavaScript Document
 $(document).ready(function(e) {
    $('.minute').text("1");
	$('.second').text("00");
	var minute = 1;
	var second = 0;
	var a;
	function f(){
		second = (second - 1 ) % 60;
		 if(second == -1){ second = 59}; 
		 if(second == 59){ minute = minute - 1;}; //秒数为59，分钟数减一；
		 $('.minute').text(minute);
	     if(second > 9 ){ $('.second').text(second);};
		 if(second <= 9){ $('.second').text("0"+second);}; //当秒数少于10时，在秒数前面加0；
		 if(minute == 0 && second == 0){ clearInterval(a);}
		 };		
	a = window.setInterval(f,1000);
});