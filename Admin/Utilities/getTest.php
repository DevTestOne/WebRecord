<?php
   require_once ('../Class/class.Database.php');
   
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
        }
		 
   try{	
         
		$query = "SELECT p.Id,p.Titulo FROM prueba p;";
		
		$data = $objDB->select($query); 
		$JsonList = '[';
		$i = 0;
        foreach($data as $user) {
           
           if($i == 0)	
             $JsonList .= '{"Id":'.$user['Id'].',"Titulo":"'.$user['Titulo'].'" }';
	       else
			 $JsonList .= ',{"Id":'.$user['Id'].',"Titulo":"'.$user['Titulo'].'" }';
		   $i++;
		}
		
        $JsonList .= ']';
		echo $JsonList;
		
		}catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }

?>