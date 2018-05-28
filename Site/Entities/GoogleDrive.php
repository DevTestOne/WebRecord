<?php
require_once ('Class/class.Database.php');

class GoogleDrive{
 
 public function SendFileToGoogleDrive(){
   
   try{	
        require 'google-api/apiClient.php';
        require 'google-api/contrib/apiOauth2Service.php';
        require 'google-api/contrib/apiDriveService.php';
        
		
		
        } else {
            $authUrl = $client->createAuthUrl();
            header('Location: ' . $authUrl);
            exit();
        }
		
      }catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }
			 
 }//SendFileToGoogleDrive

 function authenticate($client, $file = 'token.json'){
	if (file_exists($file)) return file_get_contents($file);
	$_GET['code'] = ''; // insert the verification code here
	// print the authentication URL
	if (!$_GET['code']) {
		exit($client->createAuthUrl(array('https://www.googleapis.com/auth/drive.file')) . "\n");
	}
	file_put_contents($file, $client->authenticate());
	exit('Authentication saved to token.json - now run this script again.');
 }
 
}
?>