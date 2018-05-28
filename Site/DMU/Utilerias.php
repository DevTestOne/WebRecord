<?php
 
 class Utilerias{
function cleanuserinput($dirty){
  
  if (get_magic_quotes_gpc()) {		
	$clean = stripslashes($dirty);	 	
  }else{		
	$clean = $dirty;		
  } 	
 return $clean;
}
	 
function getStringDate($date)
{
  $stringDate = $date['year'].'-'.$date['mon'].'-'.$date['mday'];
  return $stringDate;
}

function getStringDateByComponent($date)
{
  $elementsDate = explode('/', $date);
  $stringDate = $elementsDate[2].'-'.$elementsDate[0].'-'.$elementsDate[1];
  return $stringDate;
}

function getStringDateFromDatabase($date)
{
  $elementsDate = explode('-', $date);
  $stringDate = $elementsDate[1].'/'.$elementsDate[2].'/'.$elementsDate[0];
  return $stringDate;
}

function sendMail($To,$Message,$Subject){
  try {
    $From = 'contacto@savetechnology.com.mx';
	
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Aditional Headers
    $headers .= 'To: '. $To . "\r\n";
    $headers .= 'From: '. $From . "\r\n";
    
	// Sending
    mail($To, $Subject, $Message, 'From: '.$From);
	//mail($addres, $subject, $msg, "From: $_REQUEST[Email]");
 	
	} catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
	  }
  }
  
 } 
?> 