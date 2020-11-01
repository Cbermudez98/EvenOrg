<?php

    class Conectar{

        public function conexion(){
            $servidor = "localhost";
            $db_name = "prueba_evenorg";
            $user = "root";
            $pass = "";

            $conexion = new mysqli($servidor,$user,$pass,$db_name);
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }
    }

?>