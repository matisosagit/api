<?php
    class Database{
        private $host = 'localhost'; 
        private $user = 'root'; 
        private $password = ''; 
        private $database = 'baseclientes'; 
        public function conectar(){
            try {
                $conexion = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexion;
            } catch (PDOException $e) {
                die('Error al conectar: ' . $e->getMessage());
            }
        }
        
    }
?>