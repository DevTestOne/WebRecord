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
		
        $sourcePath = $_FILES['video']['tmp_name'];          // Storing source path of the file in a variable
        $targetPath = "../video_files/" . "video_".$_POST['schedule_id'].".webm";    // Target path where file is to be stored
		$videoLink  = "../Site/video_files/" . "video_".$_POST['schedule_id'].".webm";    // Target path where file is to be stored
        if (move_uploaded_file($sourcePath, $targetPath)) { // Moving Uploaded file
           $arValues       = array();
		   $arValues['Id'] = $_POST['schedule_id'];
		   
		   $arUpdateValues = array();
    	   
		   $arUpdateValues['FechaRealizacion']    = date('Y-m-d H:i:s');
	       $arUpdateValues['Video_blob']          = $_POST["video"];
		   $arUpdateValues['VideoLink']           = $videoLink;
		   $arUpdateValues['Estatus']             = 2;
	       $arUpdateValues['FechaModificacion']   = date('Y-m-d H:i:s');
		   $arUpdateValues['UsuarioModificacion'] = $_SESSION['Usuario'];
		   
		   $newID = $objDB->update("scheduledTest",$arUpdateValues,$arValues); 
		    $responseJSON = '{"Status":0,"Message":"The test has been updated successfully"}';
		
        } else {
            $responseJSON = '{"Status":1,"Message":"An error ocurr during send the video"}';;
        }
		
		//file_put_contents('test.webm', $_POST["video"]);
		
    	} catch (Exception $e) {
			$_SESSION['RegistroError'] = 1;
    		print "Ocurrio un error: " . $e->getMessage();
			$responseJSON = '{"Status":1,"Message":"Ha ocurrido un error: "'. $e->getMessage().'}';
    	}
		echo $responseJSON;
}
?>