/* function f(obj){	 
	   if(isNaN(obj)){ //判断是否为有效数字（可以带小数点），若为非法字符，则输入无效；
		  document.execCommand('undo');   
		   };
	   };*/
 
        var sj = ["信计","数本","统计"];
		var sk = ["烹饪","园林","生物"];
		var hx = ["化本","检测","制药"];
		 
      function selected(){
		    var v  = $('#s1').val();
         document.getElementById("s2").length=0; 
		 switch(v){
		   case "数计院" : addyuanxi(sj);break;	
		    case "生科院" : addyuanxi(sk);break;
			 case "化学院" : addyuanxi(hx);break; 
			  
			 };
		  };
	function addyuanxi(x){
		 document.getElementById("s2").add(new Option("--请选择--","请选择"));
		 for(var i=0;i<x.length;i++){
                document.getElementById("s2").add(new Option(x[i],x[i]));
            }
		};	