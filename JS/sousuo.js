/* function f(obj){	 
	   if(isNaN(obj)){ //�ж��Ƿ�Ϊ��Ч���֣����Դ�С���㣩����Ϊ�Ƿ��ַ�����������Ч��
		  document.execCommand('undo');   
		   };
	   };*/
 
        var sj = ["�ż�","����","ͳ��"];
		var sk = ["���","԰��","����"];
		var hx = ["����","���","��ҩ"];
		 
      function selected(){
		    var v  = $('#s1').val();
         document.getElementById("s2").length=0; 
		 switch(v){
		   case "����Ժ" : addyuanxi(sj);break;	
		    case "����Ժ" : addyuanxi(sk);break;
			 case "��ѧԺ" : addyuanxi(hx);break; 
			  
			 };
		  };
	function addyuanxi(x){
		 document.getElementById("s2").add(new Option("--��ѡ��--","��ѡ��"));
		 for(var i=0;i<x.length;i++){
                document.getElementById("s2").add(new Option(x[i],x[i]));
            }
		};	