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
            
            $sql = "INSERT INTO usuario(primerNombre,segundoNombre,primerApellido,segundoApellido,tipoIdentificacion,numIdentificacion,fechaNacimiento,correo,contrasena,telefono,celular,pais,ciudad) VALUES ('$pm','$sn','$pa','$sa','$ti',$ni,'$fn','$co','$pw',$tl,$cl,'$ps','$cd')";

            if(mysqli_query($this->db, $sql)){
                $mensaje = "Exito al guardar en la base de datos";
            }else{
                $mensaje = "Error al guardar datos => ".mysqli_error($this->db);
            }

            return $mensaje;
        }

        //leer

        //actualizar

        //eliminar
    }



?>