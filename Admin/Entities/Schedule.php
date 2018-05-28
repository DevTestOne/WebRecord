<?php
require_once ('Class/class.Database.php');

class Schedule{

	public $Id;
	public $IdTest;
	public $IdAplicant;
	public $InitialDate;
	public $FinalDate;
	public $Estatus;
	public $Video_link;

 public function getSchedule($idSchedule){
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
         } 
   try{	
        $query = "SELECT * FROM scheduledTest WHERE Id = ".$idSchedule.";";
		
		$data = $objDB->select($query); 
		
        foreach($data as $test) {
          
		   
		   $this->Id             = $test['Id'];
	       $this->IdTest         = $test['IdPrueba'];
	       $this->IdAplicant     = $test['IdUsuario'];
	       $this->InitialDate    = $test['FechaInicio'];
	       $this->FinalDate      = $test['FechaFin'];
		   $this->Status         = $test['Estatus'];
		   $this->Video_link     = $test['VideoLink'];
		  
		}
		
      }catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }
 }// getTest
 
}
?>