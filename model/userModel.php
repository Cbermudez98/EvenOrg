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
            mysqli_close($this->db);
            return $mensaje;
        }


        //Iniciar Sesion


        public function iniciarSesion($usuario){
            
           $correo = $usuario->getCorreo();
           $password = $usuario->getPassword();
           
            $sql = ("SELECT * FROM usuario WHERE correo='".$correo."' AND contrasena = '".$password."'");
            $result = mysqli_query($this->db, $sql);

            if (mysqli_num_rows($result)>0) {
                while ($fila =mysqli_fetch_array($result)){
                    session_start();
                    $_SESSION['correo'] = $fila['correo'];
                    $mensaje = "Bienvenido <a href='../index.php'>Volver al inicio</a>";
                }
            }else{
                $mensaje = "error no se encontraron datos correspondientes al correo";
            }
            
            return $mensaje;
            
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
            
            if (isset($_SESSION['correo'])) {
                $mensaje = "exito al cerrar sesion";
            }else{
                $mensaje = "";
            }
            
            return $mensaje;
        }

        //leer

        //actualizar

        //eliminar
    }



?>