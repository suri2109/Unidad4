<?php

    class Conexion {
        public function getConexion() {
            $user = "root";
            $pass = "";
            $host = "localhost";
            $db = "agenda";
            $port = "3307";

            $conexion = new PDO("mysql:host=$host;dbname=$db; port=$port", $user, $pass);
            return $conexion;
        }
    }

?>