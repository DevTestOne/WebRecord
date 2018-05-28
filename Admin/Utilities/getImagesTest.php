<?php
   require_once ('../Class/class.Database.php');
   
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
        }
		 
   try{	
         
		$query = "SELECT i.*,ip.TiempoMuestra,ip.TiempoDescanso FROM images i,imagenesPrueba ip WHERE i.Estatus = 1 AND i.Id = ip.IdImagen AND ip.IdPrueba = ".$_POST['IdTest'].";";
		
		$data = $objDB->select($query); 
		$JsonList = '[';
		$i = 0;
        foreach($data as $image) {
           
           if($i == 0)	   
             $JsonList .= '{"Id":'.$image['Id'].',"Image":"'.$image['Nombre'].'","Titulo":"'.$image['Titulo'].'","Descripcion":"'.$image['Descripcion'].'","TimepoMuesta":'.$image['TiempoMuestra'].',"TiempoDescanso":'.$image['TiempoDescanso'].'}';
	       else
			 $JsonList .= ',{"Id":'.$image['Id'].',"Image":"'.$image['Nombre'].'","Titulo":"'.$image['Titulo'].'","Descripcion":"'.$image['Descripcion'].'","TimepoMuesta":'.$image['TiempoMuestra'].',"TiempoDescanso":'.$image['TiempoDescanso'].'}';
		   $i++;
		}
		
        $JsonList .= ']';
		echo $JsonList;
		
		}catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }

?>