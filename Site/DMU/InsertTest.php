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
		
		$arValues = array();
    	
		$arValues['Titulo']              = $utilerias->cleanuserinput($_POST["Titulo"]);
	    $arValues['Indicaciones']        = $utilerias->cleanuserinput($_POST["Indicaciones"]);
	    $arValues['FechaCreacion']       = $utilerias->getStringDate(getdate());
		$arValues['FechaModificacion']   = date('Y-m-d H:i:s');
		$arValues['UsuarioModificacion'] = $_SESSION['Usuario'];
		
		$newID = $objDB->insert("prueba",$arValues); 
		 $responseJSON = '{"Status":0,"Message":"The test has been added successfully"}';
		
		
		echo $responseJSON;
    	} catch (Exception $e) {
			$_SESSION['RegistroError'] = 1;
    		print "Ocurrio un error: " . $e->getMessage();
    	}
		
}
?>