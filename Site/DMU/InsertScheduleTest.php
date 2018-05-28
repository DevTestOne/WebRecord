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
    	
		$arValues['IdPrueba']            = $utilerias->cleanuserinput($_POST["testID"]);
	    $arValues['IdUsuario']           = $utilerias->cleanuserinput($_POST["aplicantId"]);
	    $arValues['FechaInicio']         = $utilerias->getStringDateByComponent($_POST["initialDate"]);
		$arValues['FechaFin']            = $utilerias->getStringDateByComponent($_POST["finalDate"]);
		$arValues['Estatus']             = 1;
		$arValues['FechaCreacion']       = $utilerias->getStringDate(getdate());
		$arValues['FechaModificacion']   = date('Y-m-d H:i:s');
		$arValues['UsuarioModificacion'] = $_SESSION['Usuario'];
		
		$newID = $objDB->insert("scheduledTest",$arValues); 
		 $responseJSON = '{"Status":0,"Message":"The test has been added successfully"}';
		
		
		
    	} catch (Exception $e) {
			$_SESSION['RegistroError'] = 1;
    		print "Ocurrio un error: " . $e->getMessage();
			$responseJSON = '{"Status":1,"Message":"Ha ocurrido un error: "'. $e->getMessage().'}';
    	}
		echo $responseJSON;
}
?>