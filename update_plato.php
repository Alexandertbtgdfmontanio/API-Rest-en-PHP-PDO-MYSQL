<?php
    require_once('includes/platos.php');

    if($_SERVER['REQUEST_METHOD'] == 'PUT' 
        && isset($_GET['id_plato'], $_GET['nombre_plato']) && isset($_GET['descripcion']) && isset($_GET['precio']) && isset($_GET['categoria'])){
            platos::update_plato($_GET['id_plato'], $_GET['nombre_plato'], $_GET['descripcion'], $_GET['precio'], $_GET['categoria']);
        }

?>