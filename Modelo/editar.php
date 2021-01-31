<!DOCTYPE html>
<html>
<head>
<style> 
    h1 {
        color: #F00;
        text-align: center;
    }
    .primera_fila {
        text-align: center;
        background-color:#F7DC6F;
        color: #000;
    }
    table {
        background : #FCF3CF;
    }
</style>
</head>
<body>
    <h1>ACTUALIZAR</h1>
<?php

include_once ('conectar.php');
$base= Conectar::conexion();


if (!isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $ape = $_GET['ape'];
    $dir = $_GET['dir'];
    
    }else {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $ape = $_POST['ape'];
        $dir = $_POST['dir'];  
        
        $sql = "UPDATE pruebas.datos_usuarios SET nombre=:miNom, apellido=:miApe, direccion=:miDir WHERE  id = $id";
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":miNom"=>$nom, ":miApe"=>$ape, ":miDir"=>$dir));
       
        header('location:../index.php');//Aca se usa ../ para salir de Modelo e ir al index
    }
?>
    <form name = "form1" method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
    <table width = "25%" border = "1" align = "center">
        <tr>
           <label for = "id"><input type = "hidden" name = "id" id = "id" value = "<?php echo $id; ?>"></tr>
        <tr>
            <td>Nombre</td>
            <td><label for = "nom"><input type = "text" name = "nom" id = "nom" value = "<?php echo $nom; ?>"></td></tr>
        <tr>
            <td>Apellido</td>
            <td><label for = "ape"><input type = "text" name = "ape" id = "ape" value = "<?php echo $ape; ?>"></td></tr>
        <tr>
            <td>Dirección</td>
            <td><label for = "dir"><input type = "text" name = "dir" id = "dir" value = "<?php echo $dir; ?>"></td></tr>
        <tr>
           <td colspan = "2"><button type = "submit" name = "actualizar" id = "actualizar">Actualizar</td>
        </tr>
    </table>
    </form>    
</body>
</html>