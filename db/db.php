<?php

    class Conectar{

        public function conexion(){
            $servidor = "localhost";
            $dbname = "prueba_evenorg";
            $user = "root";
            $pass = "";

            $conexion = new mysqli($servidor,$user,$pass,$dbname);
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }
    }

?>