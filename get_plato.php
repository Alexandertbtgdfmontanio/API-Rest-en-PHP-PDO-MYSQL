<?php
    require_once('includes/platos.php');

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        platos::get_plato();
        }

?>