<?php

    class Consultas {

        public function agregarContacto($nombre, $direccion, $telefono, $email) {
            $base = new Conexion();
            $conexion = $base->getConexion();
            $sql = "insert into contactos (nombre, direccion, telefono, email) values (:nombre, :direccion, :telefono, :email);";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':direccion', $direccion);
            $statement->bindParam(':telefono', $telefono);
            $statement->bindParam(':email', $email);

            if (!$statement) {
                echo '<center>';
   	            print('<h1>NO SE AGREGO</h1>');
	            echo '</center>';
            } else {
                $statement->execute();
                $conexion = null;
                echo '<center>';
	            print('<h1>Se Agrego</h1>');
 	            echo '</center>';
            }
        }

        public function cargarContactos() {
            $filas = null;
            $base = new Conexion();
            $conexion = $base->getConexion();
            $sql = "select * from contactos;";
            $statement = $conexion->prepare($sql);
            $statement->execute();

            while($result = $statement->fetch()) {
                $filas[] = $result;
            }

            return $filas;
        }

    }

?>
