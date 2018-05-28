<?php
   require_once ('../Class/class.Database.php');
   
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
        }
		 
   try{	
         
		$query = "SELECT * FROM images WHERE Estatus = 1;";
		
		$data = $objDB->select($query); 
		$JsonList = '[';
		$i = 0;
        foreach($data as $image) {
           
           if($i == 0)	   
             $JsonList .= '{"Id":'.$image['Id'].',"Image":"'.$image['Nombre'].'","Titulo":"'.$image['Titulo'].'","Descripcion":"'.$image['Descripcion'].'"}';
	       else
			 $JsonList .= ',{"Id":'.$image['Id'].',"Image":"'.$image['Nombre'].'","Titulo":"'.$image['Titulo'].'","Descripcion":"'.$image['Descripcion'].'"}';
		   $i++;
		}
		
        $JsonList .= ']';
		echo $JsonList;
		
		}catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }

?>