<?php
    require_once('includes/platos.php');

    if($_SERVER['REQUEST_METHOD'] == 'DELETE' 
        && isset($_GET['id_plato']) ){
            platos::delete_plato($_GET['id_plato']);
        }

?>