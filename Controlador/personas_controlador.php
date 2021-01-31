<?php
    require_once ("Modelo/personas_modelo.php");
    $persona = new Personas_modelo(); //Aca creo una instancia del objeto Personas_modelo
    $matrizPersonas = $persona->get_personas();
    require_once ("Vista/personas_vista.php");
?>