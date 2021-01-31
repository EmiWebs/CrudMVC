<?php
class Personas_modelo {
    private $db;
    private $personas;
    
    public function __construct() {
        require_once ("Conectar.php");
        $this->db=Conectar::conexion();// Con $this especifico la variable db que contendra la conexion, usamos $this porque nos encontramos dentro de la misma clase
        $this->personas = array();
    }
    public function get_personas() {
        require ('paginacion.php');
        $consulta = $this->db->query("SELECT * FROM  pruebas.datos_usuarios LIMIT $empezar_desde, $tamaño_paginas");// Aca en $consulta nos devuelve todos los usuarios de la tabla usuarios 
        while ($filas= $consulta->fetch(PDO::FETCH_ASSOC)) { // Aca recorremos los registros, almacenados en $consulta y lo almacenamos en $fila
            $this->personas[]=$filas;
        }
        return $this->personas; //Aca devolvemos el array con todos los productos que hay en su interior

    }
}

?>