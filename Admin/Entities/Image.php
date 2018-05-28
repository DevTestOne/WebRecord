<?php
require_once ('Class/class.Database.php');

class Image{

	public $Id;
	public $Nombre;
	public $Titulo;
	public $Descripcion;
	public $Estatus;
	public $FechaCreacion;
	public $FechaModificacion;
	public $UsuarioModificacion;
	
 
 public function getImage($idImage){
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
         } 
   try{	
        $query = "SELECT * FROM images i WHERE i.Id = ".$idImage.";";
		
		$data = $objDB->select($query); 
		
        foreach($data as $image) {
          
		   $this->Id                    = $image['Id'];
	       $this->Nombre                = $image['Nombre'];
	       $this->Titulo                = $image['Titulo'];
	       $this->Descripcion           = $image['Descripcion'];
	       $this->Estatus               = $image['Estatus'];
	       $this->FechaCreacion         = $image['FechaCreacion'];
	       $this->FechaModificacion     = $image['FechaModificacion'];
	       $this->UsuarioModificacion   = $image['UsuarioModificacion'];

		}
		
      }catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }
 }// __construct
 
}
?>