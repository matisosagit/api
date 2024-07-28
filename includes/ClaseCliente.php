<?php
    require_once('ClaseBaseDeDatos.php');

    class Cliente{
        public static function crearCliente($nombre,$correo,$telefono){
            $database = new Database;
            $conn = $database->conectar();
            $stmt = $conn->prepare('INSERT INTO clientes(nombre, correo, telefono) VALUES(:nombre, :correo, :telefono)');
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':telefono', $telefono);

            if($stmt->execute()){
                header('HTTP/1.1 201 El cliente fue creado exitosamente');
            } else{
                header('HTTP/1.1 404 Error al crear cliente');
            }
        }

        public static function borrarCliente($id){
            $database = new Database;
            $conn = $database->conectar();
            $stmt = $conn->prepare('DELETE FROM clientes WHERE id = :id');
            $stmt->bindParam(':id', $id);

            if($stmt->execute()){
                header('HTTP/1.1 201 El cliente fue borrado exitosamente');
            } else{
                header('HTTP/1.1 404 Error al borrar cliente');
            }
        }

        public static function actualizarCliente($id, $nombre, $correo, $telefono){
            $database = new Database;
            $conn = $database->conectar();
            $stmt = $conn->prepare('UPDATE clientes SET nombre=:nombre, correo=:correo, telefono=:telefono WHERE id=:id');
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':telefono', $telefono);

            if($stmt->execute()){
                header('HTTP/1.1 201 El cliente fue actualizado exitosamente');
            } else{
                header('HTTP/1.1 404 Error al actualizar cliente');
            }

        }

        public static function obtenerListaClientes(){
            $database = new Database;
            $conn = $database->conectar();
            $stmt = $conn->prepare('SELECT * FROM clientes');

            if($stmt->execute()){
                $resultado = $stmt->fetchAll();
                echo json_encode($resultado);
                header('HTTP/1.1 201 Proceso exitoso');
            } else{
                header('HTTP/1.1 404 Error');
            }
        }
    }
?>