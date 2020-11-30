<?php
  require_once('../model/proveedorModel.php');  
  class Proveedor{

    public $id_usuario;
    public $camara_comercio;
    public $numero_catricula;
    public $nit;
    public $razon_social;
    public $tipo_empresa;
    public $pais;
    public $ciudad;
    public $direccion;
    public $telefono;
    public $celular;
    public $correo;

    //Getters
    public function getId_usuario(){
      return $this->id_usuario;
    }

    public function getCamara_comercio(){
      return $this->camara_comercio;
    }

    public function getNumero_matricula(){
      return $this->numero_matricula;
    }

    public function getNit(){
      return $this->nit;
    }
    
    public function getRazon_social(){
      return $this->razon_social;
    }

    public function getTipo_empresa(){
      return $this->tipo_empresa;
    }

    public function getPais(){
      return $this->pais;
    }

    public function getCiudad(){
      return $this->ciudad;
    }

    public function getDireccion(){
      return $this->direccion;
    }

    public function getTelefono(){
      return $this->telefono;
    }  
    
    public function getCelular(){
      return $this->celular;
    }

    public function getCorreo(){
      return $this->correo;
    }

    //Setters
    public function setId_usuario($id_usuario){
      $this->id_usuario = $id_usuario;
    }

    public function setCamara_comercio($camara_comercio){
      $this->camara_comercio = $camara_comercio;
    } 
    
    public function setNumero_matricula($numero_matricula){
      $this->numero_matricula = $numero_matricula;
    }

    public function setNit($nit){
      $this->nit = $nit;
    }

    public function setRazon_social($razon_social){
      $this->razon_social = $razon_social;
    }
    
    public function setTipo_empresa($tipo_empresa){
      $this->tipo_empresa = $tipo_empresa;
    }

    public function setPais($pais){
      $this->pais = $pais;
    }

    public function setCiudad($ciudad){
      $this->ciudad = $ciudad;
    }

    public function setDireccion($direccion){
      $this->direccion = $direccion;
    }
    
    public function setTelefono($telefono){
      $this->telefono = $telefono;
    }

    public function setCelular($celular){
      $this->celular = $celular;
    }

    public function setCorreo($correo){
      $this->correo = $correo;
    }

  }
  if(isset($_GET['pag'])){
      session_start();
     $mp = new proveedorModel();
     $respuesta = $mp->consultaProveedor($_SESSION['id']);
     if($respuesta === "true"){
       $id = $mp->consultaIdProveedor($_SESSION['id']);
	header("Location: ../view/modules/template/index.php?pag=formServicios");
     }else{
      header("Location: ../view/modules/template/index.php?pag=formProveedor");
     }
   }

   $op = "";
  if(isset($_POST['token'])){
    $op = $_POST['token'];
  }
  $pm = new proveedorModel();
  switch ($op){
    case "registrarProveedor":
      $proveedor = new Proveedor();
      $proveedor->setId_usuario($_POST['idusuario']);
      $proveedor->setCamara_comercio($_POST['camcomercio']);
      $proveedor->setNumero_matricula($_POST['nummatricula']);
      $proveedor->setNit($_POST['nit']);
      $proveedor->setRazon_social($_POST['razonsocial']);
      $proveedor->setTipo_empresa($_POST['tipoempresa']);
      $proveedor->setPais($_POST['selectpais']);
      $proveedor->setCiudad($_POST['selectciudad']);
      $proveedor->setDireccion($_POST['direccion']);
      $proveedor->setTelefono($_POST['telefono']);
      $proveedor->setCelular($_POST['celular']);
      $proveedor->setCorreo($_POST['correo']);
      $respuesta = $pm->insertarProveedor($proveedor);
      if($respuesta == "Exito"){
      
      }
      
      break;
  }


?>
