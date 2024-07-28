<?php
    require_once('../includes/ClaseCliente.php');

    if($_SERVER['REQUEST_METHOD'=='GET']) {
        Cliente::obtenerListaClientes();
    }
?>