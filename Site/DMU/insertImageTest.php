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
		
		$sqlQuery = "SELECT * FROM imagenesPrueba WHERE IdPrueba = ".$_POST["IdTest"]." AND IdImagen = ".$_POST["IdImage"].";";
		$data = $objDB->select($sqlQuery);
	    
		$imageFounded = 0;
	    foreach($data as $user) 
	    {
		  $imageFounded = 1;	
		}
		
		if($imageFounded == 1)
		{
		  $responseJSON = '{"Status":1,"Message":"The image is already in the test"}';	
		}else{
		$arValues = array();
    	
		$arValues['IdPrueba']            = $utilerias->cleanuserinput($_POST["IdTest"]);
	    $arValues['IdImagen']            = $utilerias->cleanuserinput($_POST["IdImage"]);
		$arValues['TiempoMuestra']       = $utilerias->cleanuserinput($_POST["tiempoMuestra"]);
		$arValues['TiempoDescanso']      = $utilerias->cleanuserinput($_POST["tiempoDescanso"]);
	    $arValues['FechaCreacion']       = $utilerias->getStringDate(getdate());
		$arValues['FechaModificacion']   = date('Y-m-d H:i:s');
		$arValues['UsuarioModificacion'] = $_SESSION['Usuario'];
		
		$newID = $objDB->insert("imagenesPrueba",$arValues); 
		 $responseJSON = '{"Status":0,"Message":"The image has been added successfully"}';
	    
		}
		
		echo $responseJSON;
    	} catch (Exception $e) {
			$_SESSION['RegistroError'] = 1;
    		print "Ocurrio un error: " . $e->getMessage();
    	}
		
}
?>