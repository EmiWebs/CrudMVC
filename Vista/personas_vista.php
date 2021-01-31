<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: #454545;
}
h1 {
    text-align: center;
    color: red;
}
td {
    border: 1px solid #F00;
}
table{
  margin: auto;
  background-color: lightblue;
}
.titulo {
    background-color:#1d1d1d;
    color : #FFF;
    text-align : center;
}
</style>
</head>
<body>
<?php
    require ('Modelo/paginacion.php');
?>
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
<h1>CRUD en MVC</h1>
    <table width = "50%" border = "0" align = "center">
    <tr>
        <td class = "primera_fila">Id</td>
        <td class = "primera_fila">Nombre</td>
        <td class = "primera_fila">Apellido</td>
        <td class = "primera_fila">Dirección</td>
    
    </tr>
    <?php
    foreach($matrizPersonas as $persona): // Todo lo que viene a continuación hasta endforeach se va a repetir tantas veces como reg. tenga la base de datos
    ?>
    <tr>
        <td><?php echo $persona['id'] ?></td> 
        <td><?php echo $persona['nombre'] ?></td>
        <td><?php echo $persona['apellido'] ?></td>
        <td><?php echo $persona['direccion'] ?></td>
        <td class = "bot"><a href = "Modelo/borrar.php?id=<?php echo $persona['id'] ?>"><input type = "button" name = "del" id = "del" value = "Borrar"></a></td>
        <td class = "bot"><a href = "Modelo/editar.php?id=<?php echo $persona['id'] ?> & nom=<?php echo $persona['nombre']; ?> & ape=<?php echo $persona['apellido']; ?> & dir=<?php echo $persona['direccion'];?>"><input type = "button" name = "up" id = "up" value = "Actualizar"></a></td>
    </tr>
        
    <?php
    ;
    endforeach;
    ?>

    <tr>
        <td></td>
        <td><input type = "text" name = "Nom" size = "10" class = "centrado"></td>
        <td><input type = "text" name = "Ape" size = "10" class = "centrado"></td>
        <td><input type = "text" name = "Dir" size = "10" class = "centrado"></td>
        <td class = "bot"><input type = "submit" name = "cr" id = "cr" value = "Insertar"></td>

    </tr>
    <tr><td>
<?php //-------------------PAGINACION-----------------------

for ($i = 1; $i<=$total_paginas; $i++) {
    echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";// Ojo no debe quedar espacio en el href para pasar un parámetro con ?, debe ir asi(href='?pagina=)
};
//----------------------------------------------------------
?>
</td></tr>
    </table>
 </form>   
</body>
</head>