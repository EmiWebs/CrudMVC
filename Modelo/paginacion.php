    <?php
        //---------------------------------Paginacion-----------
        require_once ('conectar.php');
        $base= Conectar::conexion();
        $tamaño_paginas = 3;

        if (isset($_GET["pagina"])) {
            if ($_GET["pagina"]==1){

                header('location:index.php'); // Ojo location va entre comillas o arroja error
            }else {
                $pagina = $_GET["pagina"];
            }
        }else { 
            $pagina =1;
        }

    $empezar_desde = ($pagina-1)*$tamaño_paginas;

    $sql_total = "SELECT * FROM pruebas.datos_usuarios";
    $resultado = $base->prepare($sql_total);
    $resultado->execute(array());
    
    $num_filas= $resultado->rowCount();
    $total_paginas = ceil($num_filas/$tamaño_paginas); // Aca con CEIL se redondea la división inexacta

        //-----------------------------------Fin Paginación---
    ?>