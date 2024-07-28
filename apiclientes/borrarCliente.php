<?php
    require_once('../includes/ClaseCliente.php');

    if(($_SERVER['REQUEST_METHOD'=='DELETE']) && isset($_GET['id'])) {
        Cliente::borrarCliente($_GET('id'));
    }
?>