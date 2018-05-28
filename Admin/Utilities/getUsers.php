<?php
   require_once ('../Class/class.Database.php');
   
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
        }
		 
   try{	
         
		$query = "SELECT u.Id,u.Nombre,u.Apellidos,u.Email,u.Login,r.Descripcion FROM usuario u, roles r WHERE u.IdRol = r.Id;";
		
		$data = $objDB->select($query); 
		$JsonList = '[';
		$i = 0;
        foreach($data as $user) {
           
           if($i == 0)	
             $JsonList .= '{"Id":'.$user['Id'].',"Name":"'.$user['Nombre']." ".$user['Apellidos'].'","Email":"'.$user['Email'].'","Login":"'.$user['Login'].'","Rol":"'.$user['Descripcion'].'"}';
	       else
			 $JsonList .= ',{"Id":'.$user['Id'].',"Name":"'.$user['Nombre']." ".$user['Apellidos'].'","Email":"'.$user['Email'].'","Login":"'.$user['Login'].'","Rol":"'.$user['Descripcion'].'"}';
		   $i++;
		}
		
        $JsonList .= ']';
		echo $JsonList;
		
		}catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }

?>