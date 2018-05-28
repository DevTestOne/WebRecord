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
		$arValues['Id'] = $_POST['idSchedule'];
		
		
		$arUpdateValues = array();
    	
		$arUpdateValues['IdPrueba']            = $utilerias->cleanuserinput($_POST["testID"]);
	    $arUpdateValues['IdUsuario']           = $utilerias->cleanuserinput($_POST["aplicantId"]);
	    $arUpdateValues['FechaInicio']         = $utilerias->getStringDateByComponent($_POST["initialDate"]);
		$arUpdateValues['FechaFin']            = $utilerias->getStringDateByComponent($_POST["finalDate"]);
		$arUpdateValues['Estatus']             = 1;
		$arUpdateValues['FechaCreacion']       = $utilerias->getStringDate(getdate());
		$arUpdateValues['FechaModificacion']   = date('Y-m-d H:i:s');
		$arUpdateValues['UsuarioModificacion'] = $_SESSION['Usuario'];
		
		$newID = $objDB->update("scheduledTest",$arUpdateValues,$arValues); 
		 $responseJSON = '{"Status":0,"Message":"The test has been updated successfully"}';
		
		
		
    	} catch (Exception $e) {
			$_SESSION['RegistroError'] = 1;
    		print "Ocurrio un error: " . $e->getMessage();
			$responseJSON = '{"Status":1,"Message":"Ha ocurrido un error: "'. $e->getMessage().'}';
    	}
		echo $responseJSON;
}
?>