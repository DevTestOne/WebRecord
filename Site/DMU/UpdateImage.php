<?php
session_start();
require_once '../Class/class.Database.php';
require_once ('Utilerias.php');

if (!empty($_POST)) {
	try {
		
		$objDB = new Database();
		$utilerias = new Utilerias();
		
		$responseJSON = '';
		
		$arValues       = array();
		$arValues['Id'] = $_POST['imageId'];
		
		$arpUpdValues = array();
    	
		// Delete image
		unlink("../testimages/".$_POST["DeleteName"]);
		
		$arUpdValues['Nombre']        = $utilerias->cleanuserinput($_POST["Name"]);
		$arUpdValues['Titulo']        = $utilerias->cleanuserinput($_POST["Title"]);
		$arUpdValues['Descripcion']   = $utilerias->cleanuserinput($_POST["Description"]);
		
		$arUpdValues['FechaModificacion']   = date('Y-m-d H:i:s');
		$arUpdValues['UsuarioModificacion'] = $_SESSION['Usuario'];
		
		$newID = $objDB->update("images",$arUpdValues,$arValues); 
		 $responseJSON = '{"Status":0,"Message":"The image has been updeted successfully"}';
		
		   echo $responseJSON;
    	} catch (Exception $e) {
			$responseJSON = '{"Status":1,"Message":"Ocurrio un error: "'.$e->getMessage().'}';
			echo $responseJSON;
		}
		
}
?>