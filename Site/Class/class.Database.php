<?php
class Database {
	private $server;
	private $user;
	private $password;
	private $dbname;
	private $hConn;
	private $bdBase;

	
	public function __construct(){
		
		
		if (file_exists("{$_SERVER['DOCUMENT_ROOT']}/Admin/Configuracion/properties.xml")) {
          $configurationXML=simplexml_load_file("{$_SERVER['DOCUMENT_ROOT']}/Admin/Configuracion/properties.xml");
		  
		  //$configuration = new SimpleXMLElement($configurationXML);
		  $this->server = $configurationXML->database->server;
		  $this->user = $configurationXML->database->user;
		  $this->password = $configurationXML->database->password;
		  $this->dbname = $configurationXML->database->dbname;
		  
		}else{
			throw new Exception("Configuracion incorrecta ",E_USER_ERROR);
		}
		
	}//Fin del Constructor
	
	public function __destruct(){
	   if(is_resource($this->hConn)){
	      @mysql_close($this->hConn);
	      }
	}//Fin de destructor
	
	public function select($sql){ //Listado de Datos con mi sentencia sql
	// Generamos Objeto MySQL_Conn.
	$mysqli = new mysqli($this->server, $this->user, $this->password, $this->dbname);
	$mysqli->select_db($this->dbname);
	// Creamos coneccion.
	if ($mysqli->connect_errno) {
      printf("Falló la conexión: %s\n", $mysqli->connect_error);
      exit();
    }
	$arReturn = array();
	
	if ($result = $mysqli->query($sql)) {

    /* obtener un array asociativo */
    while ($fila = $result->fetch_assoc()) {
        //printf ("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);
		$arReturn[] = $fila;
    }

    /* liberar el conjunto de resultados */
    $result->free();
    }
	
	$mysqli->close();
	
	return $arReturn;   
	}//Fin del metodo select
	
 public function insert($table, $arFieldValues){ //Insertar Datos
 
   // Generamos Objeto MySQL_Conn.
	$mysqli = new mysqli($this->server, $this->user, $this->password, $this->dbname);
	$mysqli->select_db($this->dbname);
	// Creamos coneccion.
	if ($mysqli->connect_errno) {
      printf("Falló la conexión: %s\n", $mysqli->connect_error);
      exit();
    }
    //Insertar Datos
    $fields = array_keys($arFieldValues);
    $values = array_values($arFieldValues);
  
    //Creamos un array de ayuda que nos ayudara a insertar los datos
    //Utilizamos mysql_scape_string() para evitar mysql injection
    $escVals = array();
    foreach($values as $val){
     if(! is_numeric($val)){
        //Nos aseguramos que todos los valores no tienen caracteres de escape
		if(!is_array($val) ){
		$val = "'" . $mysqli->real_escape_string($val) . "'";
		}
     }
     $escVals[] = $val;
    }
    //Generar la sentencia SQl
    $sql = "INSERT INTO $table (";
    $sql .= join(', ', $fields);
    $sql .= ') VALUES (';
    $sql .= join(', ', $escVals);
    $sql .= ')';
	//echo $sql;
    /*
    if (!$mysqli->query($sql)) {
        $err = "No se pudo realizar la inserccion de datos";
	    throw new Exception($err);
		exit();
     }
	*/
	try{
		 $hres = $mysqli->query($sql);
	}catch(Exception $e){
		 echo 'Ocurrio un error: '. $e->getMessage();
	 }
	$idInseted = $mysqli->insert_id;
	$mysqli->close();
	
    return $idInseted;
 }
	
public function update($table,$arFieldValues,$arConditions){ //Update de Informacion
 // Generamos Objeto MySQL_Conn.
	$mysqli = new mysqli($this->server, $this->user, $this->password, $this->dbname);
	$mysqli->select_db($this->dbname);
	// Creamos coneccion.
	if ($mysqli->connect_errno) {
      printf("Falló la conexión: %s\n", $mysqli->connect_error);
      exit();
    }
	//Crear un arreglo de ayuda para la sentencia SET
	$arUpdates = array();
	foreach($arFieldValues as $field => $val){
	   if (! is_numeric($val)){
		   //Checamos que los valores no tengan caracteres de escape
	      $val = "'" . $mysqli->real_escape_string($val) . "'";
	   }
	   
	   $arUpdates[] = "$field = $val";
	}//Fin del Foreach
	 
	 //Creamos un array de ayuda para la clausula Where
	 $arWhere = array();
	 foreach ($arConditions as $field => $val){
	 if (! is_numeric($val)){
		   //Checamos que los valores no tengan caracteres de escape
	      $val = "'" . mysql_escape_string($val) . "'";
	   }
	   
	   $arWhere[] = "$field = $val";
	 }
	 
	 $sql = "UPDATE $table SET ";
	 $sql .= join(', ', $arUpdates);
	 $sql .= ' WHERE ' . join(' AND ', $arWhere);
     
	 if (!$mysqli->query($sql)) {
        $err = "No se pudo realizar la actualizacion de datos ";
	    throw new Exception($err);
		exit();
     }
	 
	 $affected_rows = $mysqli->affected_rows;
	 $mysqli->close();
	 return $affected_rows;
}//Fin del metodo update
	
 public function delete($table,$arConditions){ //Update de Informacion
	// Generamos Objeto MySQL_Conn.
	 $mysqli = new mysqli($this->server, $this->user, $this->password, $this->dbname);
	 $mysqli->select_db($this->dbname);
	 // Creamos coneccion.
	 if ($mysqli->connect_errno) {
      printf("Falló la conexión: %s\n", $mysqli->connect_error);
      exit();
     }
	 //Creamos un array de ayuda para la clausula Where
	 $arWhere = array();
	 foreach ($arConditions as $field => $val){
	 if (! is_numeric($val)){
		   //Checamos que los valores no tengan caracteres de escape
	      $val = "'" . $mysqli->real_escape_string($val) . "'";
	   }
	   
	   $arWhere[] = "$field = $val";
	 }
	 
	 $sql = "DELETE FROM $table ";
	 $sql .= ' WHERE ' . join(' AND ', $arWhere);
     try{
		 $mysqli->query($sql);
	 }catch(Exception $e){
		 echo 'Ocurrio un error: '. $e->getMessage();
	 }
	 $mysqli->close();
	 //return $mysqli->affected_rows;
	}//Fin del metodo delete
	
}//Fin del la Clase Database
?>