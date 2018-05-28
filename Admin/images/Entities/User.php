<?php
require_once ('Class/class.Database.php');

class User{

	public $Id;
	public $Email;
	public $Login;
	public $Password;
	public $Nombre;
	public $Apellidos;
	public $TieneVigencia;
	public $Vigencia;
	public $IdRol;
	public $FechaCreacion;
	public $FechaModificacion;
	public $UsuarioModificacion;
	
 public function __construct(){
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
         } 
   try{	
        $query = "SELECT * FROM usuario u WHERE u.Id = ".$_SESSION["IdUsuario"].";";
		
		$data = $objDB->select($query); 
		
        foreach($data as $user) {

           $this-> Id                    = $user['Id'];
	       $this-> Email                 = $user['Email'];
	       $this-> Login                 = $user['Login'];
	       $this-> Password              = $user['Password'];
	       $this-> Nombre                = $user['Nombre'];
	       $this-> Apellidos             = $user['Apellidos'];
	       $this-> TieneVigencia         = $user['TieneVigencia'];
	       $this-> Vigencia              = $user['Vigencia'];
	       $this-> IdRol                 = $user['IdRol'];
	       $this-> FechaCreacion         = $user['FechaCreacion'];
	       $this-> FechaModificacion     = $user['FechaModificacion'];
	       $this-> UsuarioModificacion   = $user['UsuarioModificacion'];
			
		}
		
      }catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }
 }// __construct
 
 public function getUsers($active){
   
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
         } 
   try{	
        $query = "SELECT * FROM usuario u ";
        if ($active == true)
		{
			$query .= "WHERE u.Status = 1 ;";
		}else{
			$query .= "WHERE u.Status = 0 ;";
		}		
				
		$data = $objDB->select($query); 
		
		echo '<table id="userTable" data-sortable class="table">
		       <thead>
			  	<tr>
			  		<th>Name</th>
					<th>Email</th>
			  		<th>Date</th>
			  		<th>Status</th>
					<th></th>
			  	</tr>
			   </thead>
				
				<tbody>';
				  
        foreach($data as $user) { 
 	      echo '<tr>
				 <td>'.$user['Name'].' '.$user['LastName'].'</td>
				 <td>'.$user['Email'].'</td>
				 <td>'.$user['CreationDate'].'</td>';
		if ($withReport == true)
		{
		  echo '<td><span class="label label-success">Active</span></td>';
		}else{
		  echo '<td><span class="label label-warning">Deactivated</span></td>';
		}
		  echo '<td><a class="updProfile" href="updateUser.php?id='.$user['Id'].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
		  echo '</tr>';
		}
		echo ' </tbody>
			  </table>';
      }catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }
			 
 }//get Users
 
 public function getUser($idUser){
   try {
 	     $objDB = new Database();
 	   } catch (Exception $e) {
 	       echo $e->getMessage();
 		   exit(1);
         } 
   try{	
        $query = "SELECT * FROM usuario u WHERE u.Id = ".$idUser.";";
		
		$data = $objDB->select($query); 
		
        foreach($data as $user) {
          
		  $this-> Id                    = $user['Id'];
	       $this-> Email                 = $user['Email'];
	       $this-> Login                 = $user['Login'];
	       $this-> Password              = $user['Password'];
	       $this-> Nombre                = $user['Nombre'];
	       $this-> Apellidos             = $user['Apellidos'];
	       $this-> TieneVigencia         = $user['TieneVigencia'];
	       $this-> Vigencia              = $user['Vigencia'];
	       $this-> IdRol                 = $user['IdRol'];
	       $this-> FechaCreacion         = $user['FechaCreacion'];
	       $this-> FechaModificacion     = $user['FechaModificacion'];
	       $this-> UsuarioModificacion   = $user['UsuarioModificacion'];
		  
		}
		
      }catch (Exception $e) {
               $regresa =  "Ocurrio un error: " . $e->getMessage();
             }
 }// __construct
 
}
?>