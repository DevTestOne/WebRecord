<?php
session_start();
ob_start();
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
		
		$sqlQuery = "SELECT * FROM usuario WHERE Email = '".$_POST["Email"]."';";
		$data = $objDB->select($sqlQuery);
	    
		$emailFounded = 0;
	    foreach($data as $user) 
	    {
		  $emailFounded = 1;	
		}
		
		if($emailFounded ==  1)
		{
			$responseJSON = '{"Status":1,"Message":"El correo ya ha sido dado de alta"}';
		}else{
		   $arValues = array();
    	   
		   $arValues['Nombre']    = $utilerias->cleanuserinput($_POST["Nombre"]);
	       $arValues['Apellidos'] = $utilerias->cleanuserinput($_POST["Apellidos"]);
	       $arValues['Email']     = $utilerias->cleanuserinput($_POST["Email"]);
	       $arValues['Login']     = $utilerias->cleanuserinput($_POST["Login"]);
	       $arValues['Password']  = MD5($utilerias->cleanuserinput($_POST["Password"]));
		   $arValues['Estatus']   = 1;
		   
		   if($utilerias->cleanuserinput($_POST["HasValidity"]) > 0){
			$arValues['TieneVigencia'] = ($utilerias->cleanuserinput($_POST["HasValidity"]) == 2) ? 1 : 0; 
	        if($utilerias->cleanuserinput($_POST["HasValidity"]) == 2)
			$arValues['ExpirationDate '] = $utilerias->cleanuserinput($_POST["ExpirationDate"]);
           }
	       
		   $arValues['IdRol']               = $utilerias->cleanuserinput($_POST["Rol"]);
		   $arValues['FechaCreacion']       = $utilerias->getStringDate(getdate());
		   $arValues['FechaModificacion']   = date('Y-m-d H:i:s');
		   $arValues['UsuarioModificacion'] = $_SESSION['Usuario'];
		   
			$newID = $objDB->insert("usuario",$arValues); 
		    $responseJSON = '{"Status":0,"Message":"The user has been created successfully"}';
		   
		   //Sending Mail
		   
		   $To = $arValues['Email'];
           $Message = 'Bienvenido, usted ha sido registrado en la plataforma Confia de Verdad
		   
Ahora puede entrar a la plataforma con el usuario: '.$arValues['Login'].' y la contraseña: '. $_POST['Password'];
           
		   $Subject = 'Bienvenido a Confia de Verdad';
		   $utilerias->sendMail($To,$Message,$Subject);
		}
		   echo $responseJSON;
    	} catch (Exception $e) {
			$_SESSION['RegistroError'] = 1;
    		print "Ocurrio un error: " . $e->getMessage();
    	}
		
}
?>