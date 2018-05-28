<?php
   require_once ('../Class/class.Database.php');
   
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
        }
		 
   try{	
         
		$query = "SELECT s.Id,u.Nombre,u.Apellidos,s.Estatus,s.FechaInicio,s.FechaFin FROM usuario u, scheduledTest s WHERE u.Id = s.IdUsuario AND s.Estatus = 2;";
		
		$data = $objDB->select($query); 
		$JsonList = '[';
		$i = 0;
		$statusDesc = '';
        foreach($data as $schedule) {
           
		   if($schedule['Estatus'] == 1)
			  $statusDesc = 'Sin Realizar';
		  if($schedule['Estatus'] == 2)
			  $statusDesc = 'Realizado';
		  
           if($i == 0)	
             $JsonList .= '{"Id":'.$schedule['Id'].',"User":"'.$schedule['Nombre']." ".$schedule['Apellidos'].'","IniDate":"'.$schedule['FechaInicio'].'","FinDate":"'.$schedule['FechaFin'].'","Status":"'.$statusDesc.'"}';
	       else
			 $JsonList .= ',{"Id":'.$schedule['Id'].',"User":"'.$schedule['Nombre']." ".$schedule['Apellidos'].'","IniDate":"'.$schedule['FechaInicio'].'","FinDate":"'.$schedule['FechaFin'].'","Status":"'.$statusDesc.'"}';
		   $i++;
		}
		
        $JsonList .= ']';
		echo $JsonList;
		
		}catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }

?>