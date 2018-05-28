<?php
class Email{

 public function __construct(){
	  
	 try{
		 $this->To = '';
         $this->Message = '';
         $this->Subject = '';
	    }catch (Exception $e) {
 	         echo $e->getMessage();
 		     exit(1);
	      }
  }
  
 public function sendMail($To,$Message,$Subject){
  try {
    $From = 'contacto@clp.com';
	
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Aditional Headers
    $headers .= 'To: '. $To . "\r\n";
    $headers .= 'From: '. $From . "\r\n";
    
	// Sending
    mail($To, $Subject, $Message, $headers);
 	
	} catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
	  }
  }
 
}

?>