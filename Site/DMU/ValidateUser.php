<?php
session_start(); 
require_once ('../Class/class.Database.php');
try {
	  $objDB = new Database();
      $password = (md5($_POST['password']));
	  
	  $sql =  "SELECT * FROM usuario WHERE Login='".$_POST['login']."' AND Password = '".$password."' AND Estatus = 1;";
	  
	  $data = $objDB->select($sql);
	  
	  $founded = 0;
	   
	 foreach($data as $user) 
	 { 
	   $_SESSION["IdUsuario"] = $user['Id'];
	   $_SESSION["IdRol"]     = $user['IdRol'];
	   $_SESSION["Usuario"]   = $user['Login'];
	   
	   $founded = 1;
	   
	   if($user['IdRol'] == 3)
	     Header('Location: ../../Site/index.html');
       else
		 Header('Location: ../index.php');
	   ob_end_flush();
	   exit(1);
	 }
	  
	   if($founded == 0)
		   $_SESSION['LoginError'] = 1;
	   
	} catch (Exception $e) {
			print "Ocurrio un error: " . $e->getMessage();
		}
        //exit(1);
		$_SESSION["Error"] = 'Lo sentimos los datos son incorrectos';
		Header('Location: ../index.php');
?>
