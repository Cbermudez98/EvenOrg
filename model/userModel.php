<?php

    require_once('../db/db.php');

    class userModel{
        private $db;

        public function __construct(){
            $this->db = Conectar::conexion();
        }

        //Crud de usuario

        //insertar

        public function insertarUsuario($usuario){
            
            $pm = $usuario->getPrimernombre();
            $sn = $usuario->getSegundonombre();
            $pa = $usuario->getPrimerapellido();
            $sa = $usuario->getSegundoapellido();
            $ti = $usuario->getTipoidentificacion();
            $ni = $usuario->getNumidentificacion();
            $fn = $usuario->getFechanacimiento();
            $co = $usuario->getCorreo();
            $pw = $usuario->getPassword();
            $tl = $usuario->getTelefono();
            $cl = $usuario->getCelular();
            $ps = $usuario->getPais();
            $cd = $usuario->getCiudad();

            $sql = "INSERT INTO(primerNombre,segundoNombre,primerApellido,segundoApellido,tipoIdentificacion,numIdentificacion,
            fechaNacimiento,correo,contraseña,telefono,celular,pais,ciudad) VALUES('$pm','$sn','$pa','$sa','$ti','$ni','$fn','$co','$pw','$tl','$cl',
            '$ps','$cd')";

            if (mysqli_query($this->db, $sql)) {
                $message = "Exito al guardar";
            }else{
                $message = "Error al guardar".mysqli_error($this->db);
            }

            mysqli_close($this->db);
            return $message;
        }

        //leer

        //actualizar

        //eliminar
    }



?>