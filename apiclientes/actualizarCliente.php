<?php
    require_once('../includes/ClaseCliente.php');

    if(($_SERVER['REQUEST_METHOD'=='PUT']) && isset($_GET['id']) && isset($_GET['nombre']) && isset($_GET['correo']) && isset($_GET['telefono'])) {
        Cliente::actualizarCliente($_GET['id'], $_GET['nombre'], $_GET['correo'], $_GET['telefono']);
    }
?>