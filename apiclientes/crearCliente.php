<?php
    require_once('../includes/ClaseCliente.php');

    if(($_SERVER['REQUEST_METHOD'=='POST']) && isset($_GET['nombre']) && isset($_GET['correo']) && isset($_GET['telefono'])) {
        Cliente::crearCliente($_GET['nombre'], $_GET['correo'], $_GET['telefono']);
    }
?>