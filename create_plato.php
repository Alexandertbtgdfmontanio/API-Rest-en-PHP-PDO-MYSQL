<?php
    require_once('includes/platos.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST' 
        && isset($_GET['id_plato']) && isset($_GET['nombre_plato']) && isset($_GET['descripcion'])  && isset($_GET['precio']) && isset($_GET['categoria'])){
            platos::create_plato($_GET['id_plato'], $_GET['nombre_plato'], $_GET['descripcion'], $_GET['precio'], $_GET['categoria']);
        }

?>