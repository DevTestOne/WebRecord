<?php

require_once '../Class/class.Database.php';
require_once ('Utilerias.php');

// Clase para el guardar BLOB
class BlobGeneric {
    
        const DB_HOST = 'localhost';
        const DB_NAME = 'test1';
        const DB_USER = 'root';
        const DB_PASSWORD = '';
        
		$objDB = new Database();
		$utilerias = new Utilerias();
		
        /**
         * Open the database connection
         */
        public function __construct() {
            // open database connection
            $conStr = sprintf("mysql:host=%s;dbname=%s;charset=utf8", self::DB_HOST, self::DB_NAME);
        
            try {
                $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
                //for prior PHP 5.3.6
                //$conn->exec("set names utf8");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        /**
         * close the database connection
         */
        public function __destruct() {
            // close the database connection
            $this->pdo = null;
        }

            /**
         * insert blob into the files table
         * @param string $filePath
         * @param string $mime mimetype
         * @return bool
         */
        public function insertBlob($filePath, $mime) {
            $blob = fopen($filePath, 'rb');

            $sql = "INSERT INTO files(mime,data) VALUES(:mime,:data)";
            $stmt = $this->pdo->prepare($sql);
        
            $stmt->bindParam(':mime', $mime);
            $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);

            return $stmt->execute();
        }

            /**
         * update the files table with the new blob from the file specified
         * by the filepath
         * @param int $id
         * @param string $filePath
         * @param string $mime
         * @return bool
         */
        function updateBlob($id, $filePath, $mime) {
            
            $blob = fopen($filePath, 'rb');

            $sql = "UPDATE files
                    SET mime = :mime,
                        data = :data
                    WHERE id = :id;";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':mime', $mime);
            $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);
            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        }
                    /**
         * select data from the the files
         * @param int $id
         * @return array contains mime type and BLOB data
         */
        public function selectBlob($id) {
            
        $sql = "SELECT mime, data FROM files WHERE id = :id;";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(":id" => $id));
        $stmt->bindColumn(1, $mime);
        $stmt->bindColumn(2, $data, PDO::PARAM_LOB);

        $stmt->fetch(PDO::FETCH_BOUND);

        return array("mime" => $mime,
            "data" => $data);
        }
    }

    // Obtenemos el video
    $file = $_FILES['files'][0];

    // Creamos una instancia de la clase
    $blobObject = new BlobGeneric();

    // Guardamos el archivo
    $blobObject->insertBlob($file['tmp_name'], 'video/webm');

?>