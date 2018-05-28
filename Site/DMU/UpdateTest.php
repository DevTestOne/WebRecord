<?php
session_start();
require_once '../Class/class.Database.php';
require_once ('Utilerias.php');

if (!empty($_POST)) {
	try {
    	$objDB = new Database();
		$utilerias = new Utilerias();
    	} catch (Exception $e) {
    	echo $e->getMessage();
    	exit(1);
    }
    try {
		$responseJSON = '';
		
		$arValues       = array();
		$arValues['Id'] = $_POST['IdTest'];
		
		$arpUpdValues = array();
    	
		$arUpdValues['Titulo']        = $utilerias->cleanuserinput($_POST["Titulo"]);
	    $arUpdValues['Indicaciones']  = $utilerias->cleanuserinput($_POST["Indicaciones"]);
	  
		$arUpdValues['FechaModificacion']   = date('Y-m-d H:i:s');
		$arUpdValues['UsuarioModificacion'] = $_SESSION['Usuario'];
		
		$newID = $objDB->update("prueba",$arUpdValues,$arValues); 
		 $responseJSON = '{"Status":0,"Message":"The test has been updeted successfully"}';
		
		   echo $responseJSON;
    	} catch (Exception $e) {
			$responseJSON = '{"Status":1,"Message":"Ocurrio un error: "'.$e->getMessage().'}';
			echo $responseJSON;
		}
		
}
?>