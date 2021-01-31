<?php
    class Conectar {
        public static function conexion() {
            try {
                $conexion = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
              
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET utf8");
            }catch(Exception $e) {
                die("Error" . $e->getMessage);
                echo "Error en línea;" . $e->getLine;
            }
            return $conexion;
        }

    }
?>