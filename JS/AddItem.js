// JavaScript Document
$(document).ready(function(e) {
				 $('.rad').change(function(e) {
                   var prop1 = $('#radio_single').prop('checked')//获得input特性'checked'.
				   var prop2 = $('#radio_manny').prop('checked');
				   if(prop1){ // 当单选框为选中状态时，显示table1;
					   $('.table1').show();
					   $('.table2').hide();
					   $('.answer1').show();
					   $('.answer2').hide();
					   $('.ss').val("");
					   $('.r').prop('checked','');
					   };
				   if(prop2){// 当复选框为选中状态时，显示table2;
					   $('.table2').show();
					   $('.table1').hide();
					   $('.answer2').show();
					   $('.answer1').hide();
					   $('.s').val("");
					   $('.c').prop('checked','');
					   };
                });
	
            });