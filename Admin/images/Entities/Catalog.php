<?php
require_once ('Class/class.Database.php');

class Catalog{

 public function getOptions($IndCatalog){
   
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
         } 
   try{	
        if($IndCatalog == 1) // ROLES
          $query =  "SELECT * FROM roles;";
				
		$data = $objDB->select($query); 
				  
        foreach($data as $options) { 
 	      echo '<option value="'.$options['Id'].'">'.$options['Descripcion'].'</option>';
		}
	   }catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }
			 
 }//get Options
 
 public function getOptionsSelected($IndCatalog,$Value){
   
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
         } 
   try{	
        if($IndCatalog == 1) // ROLES
          $query =  "SELECT * FROM roles;";
				
		$data = $objDB->select($query); 
				  
        foreach($data as $options) { 
 	      if($options['Id'] == $Value)
		    echo '<option value="'.$options['Id'].'" selected>'.$options['Descripcion'].'</option>';
		  else
			echo '<option value="'.$options['Id'].'">'.$options['Descripcion'].'</option>';
		}
	   }catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }
			 
 }//get OptionsSelected
 
 
}
?>