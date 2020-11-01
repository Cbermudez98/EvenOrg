<?php
    require_once('../model/userModel.php');
    class Usuario{
        public $primerNombre;
        public $segundoNombre;
        public $primerApellido;
        public $segundoApellido;
        public $tipoIdentificacion;
        public $numIdentificacion;
        public $fechaNacimiento;
        public $correo;
        public $password;
        public $telefono;
        public $celular;
        public $pais;
        public $ciudad;

        public function __construct(){

        }

        //getters

        public function getPrimernombre(){
            return $this->primerNombre;
        }

        public function getSegundonombre(){
            return $this->segundoNombre;
        }

        public function getPrimerapellido(){
            return $this->primerApellido;
        }

        public function getSegundoapellido(){
            return $this->segundoApellido;
        }

        public function getTipoidentificacion(){
            return $this->tipoIdentificacion;
        }

        public function getNumidentificacion(){
            return $this->numIdentificacion;
        }

        public function getFechanacimiento(){
            return $this->fechaNacimiento;
        }

        public function getCorreo(){
            return $this->correo;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function getCelular(){
            return $this->celular;
        }

        public function getPais(){
            return $this->pais;
        }

        public function getCiudad(){
            return $this->ciudad;
        }

        //setters

        public function setPrimernombre($primerNombre){
            $this->primerNombre = $primerNombre;
        }

        public function setSegundonombre($segundoNombre){
            $this->segundoNombre = $segundoNombre;
        }
        
        public function setPrimerapellido($primerApellido){
            $this->primerApellido = $primerApellido;
        }

        public function setSegundoapellido($segundoApellido){
            $this->segundoApellido = $segundoApellido;
        }

        public function setTipoidentificacion($tipoIdentificacion){
            $this->tipoIdentificacion = $tipoIdentificacion;
        }

        public function setNumidentificacion($numIdentificacion){
            $this->tipoIdentificacion = $numIdentificacion;
        }

        public function setFechanacimiento($fechaNacimiento){
            $this->fechaNacimiento = $fechaNacimiento;
        }

        public function setCorreo($correo){
            $this->correo = $correo;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }

        public function setCelular($celular){
            $this->celular = $celular;
        }

        public function setPais($pais){
            $this->pais = $pais;
        }

        public function setCiudad($ciudad){
            $this->ciudad = $ciudad;
        }
    }
    $op = "";   
    if (isset($_POST['token'])) {
        $op = $_POST['token'];
    }
    $md = new userModel();
    switch ($op) {
        case 'signup':
            $usuario = new Usuario();
            $usuario->setPrimernombre($_POST['primerNombre']);
            $usuario->setSegundonombre($_POST['segundoNombre']);
            $usuario->setPrimerapellido($_POST['primerApellido']);
            $usuario->setSegundoapellido($_POST['segundoApellido']);
            $usuario->setTipoidentificacion($_POST['tipoIdentificacion']);
            $usuario->setNumidentificacion($_POST['numIdentificacion']);
            $usuario->setFechanacimiento($_POST['fechaNacimiento']);
            $usuario->setCorreo($_POST['correo']);
            $usuario->setPassword($_POST['password']);
            $usuario->setTelefono($_POST['telefono']);
            $usuario->setCelular($_POST['celular']);
            $usuario->setPais($_POST['pais']);
            $usuario->setCiudad($_POST['ciudad']);

            $respuesta = $md->insertarUsuario($usuario);
            echo $respuesta;


            break;
        
        default:
            # code...
            break;
    }



?>