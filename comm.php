<?php
function page_jump($msg,$link){
	echo "<script language='javascript'>";
	echo  "alert ('$msg');";
	echo  "location.href('$link');";
	echo "</script>";
	}
/* function counter(){        
	$count=(int)fgets(@fopen("counter.txt","r"))+1;       
	 if(!$_SESSION['hent']['guest'])     
	    {   $_SESSION['hent']['guest']=1;                
	    fputs(fopen("counter.txt","w+"),$count);        
	    }        
     return $count;}echo counter();?> */