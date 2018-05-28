<?php
   require_once ('../Class/class.Database.php');
   
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
        }
		 
   try{	
         
		$query = "SELECT p.Id,p.Titulo FROM prueba p WHERE p.Id = ".$_POST['IdTest'].";";
		
		$data = $objDB->select($query); 
		foreach($data as $test) {
           $JsonList .= '{"Id":'.$test['Id'].',"Titulo":"'.$test['Titulo'].'" }';
	    }
		
		echo $JsonList;
		
		}catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }

?>