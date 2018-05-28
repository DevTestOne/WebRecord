<?php
require_once ('Class/class.Database.php');

class Test{

	public $Id;
	public $Titulo;
	public $Indicaciones;

 public function getTest($idTest){
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
         } 
   try{	
        $query = "SELECT * FROM prueba WHERE Id = ".$idTest.";";
		
		$data = $objDB->select($query); 
		
        foreach($data as $test) {
          
		   $this-> Id                    = $test['Id'];
	       $this-> Titulo                = $test['Titulo'];
	       $this-> Indicaciones          = $test['Indicaciones'];
	       $this-> FechaCreacion         = $test['FechaCreacion'];
	       $this-> FechaModificacion     = $test['FechaModificacion'];
	       $this-> UsuarioModificacion   = $test['UsuarioModificacion'];
		  
		}
		
      }catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }
 }// getTest
 
}
?>