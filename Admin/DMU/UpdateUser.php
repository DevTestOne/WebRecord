<?php
session_start();
require_once '../Class/class.Database.php';
require_once ('Utilerias.php');
require_once ('../Entities/Email.php');

if (!empty($_POST)) {
	try {
    	$objDB = new Database();
		$utilerias = new Utilerias();
		$email = new Email();
    	} catch (Exception $e) {
    	echo $e->getMessage();
    	exit(1);
    }
    try {
		$responseJSON = '';
		
		$arValues       = array();
		$arValues['Id'] = $_POST['IdUsuario'];
		
		$arpUpdValues = array();
    	
		$arUpdValues['Nombre']    = $utilerias->cleanuserinput($_POST["Nombre"]);
	    $arUpdValues['Apellidos'] = $utilerias->cleanuserinput($_POST["Apellidos"]);
	    $arUpdValues['Email']     = $utilerias->cleanuserinput($_POST["Email"]);
	    $arUpdValues['Login']     = $utilerias->cleanuserinput($_POST["Login"]);
	    if(strlen($_POST["Password"]) > 0)
		 $arUpdValues['Password']  = MD5($_POST["Password"]);
		$arUpdValues['Estatus']   = 1;
		
		if($utilerias->cleanuserinput($_POST["HasValidity"]) > 0){
		 $arUpdValues['TieneVigencia']   = ($utilerias->cleanuserinput($_POST["HasValidity"]) == 2) ? 1 : 0; 
	     if($utilerias->cleanuserinput($_POST["HasValidity"]) == 2)
		  $arUpdValues['ExpirationDate '] = $utilerias->cleanuserinput($_POST["ExpirationDate"]);
        }
	    
		$arUpdValues['IdRol']               = $utilerias->cleanuserinput($_POST["Rol"]);
		$arUpdValues['FechaModificacion']   = date('Y-m-d H:i:s');
		$arUpdValues['UsuarioModificacion'] = $_SESSION['Usuario'];
		
		$newID = $objDB->update("usuario",$arUpdValues,$arValues); 
		 $responseJSON = '{"Status":0,"Message":"The user has been updeted successfully"}';
		
		   echo $responseJSON;
    	} catch (Exception $e) {
			$responseJSON = '{"Status":1,"Message":"Ocurrio un error: "'.$e->getMessage().'}';
			echo $responseJSON;
		}
		
}
?>