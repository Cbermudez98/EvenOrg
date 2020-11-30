<?php
  require_once("../model/proveedorModel.php");
  require_once('../model/servicioModel.php');  
  class Servicio{
    public $idProveedor; 
    public $idCategoriaServicio;
    public $tipoServicio;
    public $descripcion;
    public $precio;

    //Getters
    public function getIdCategoriaServicio(){
      return $this->idCategoriaServicio;
    }

    public function getTipoServicio(){
      return $this->tipoServicio;
    }

    public function getDescripcion(){
      return $this->descripcion;
    }

    public function getPrecio(){
      return $this->precio;
    }

    public function getIdProveedor(){
      return $this->idProveedor;
    }

    //Setters
    public function setIdCategoriaServicio($idCategoriaServicio){
      $this->idCategoriaServicio = $idCategoriaServicio;
    }

    public function setTipoServicio($tipoServicio){
      $this->tipoServicio = $tipoServicio;
    }

    public function setDescripcion($descripcion){
      $this->descripcion = $descripcion;
    }

    public function setPrecio($precio){
      $this->precio = $precio;
    }

    public function setIdProveedor($idProveedor){
      $this->idProveedor = $idProveedor;
    }

   
  }
  $op = ""; 
  if(isset($_POST['token'])){
    $op = $_POST['token'];
  }
  $sm = new servicioModel();
  $pm = new proveedorModel();
  
  switch ($op){
  case "registrar":
    session_start();
      $id_proveedor = $pm->consultaIdProveedor($_SESSION['id']);
      $servicio = new Servicio();
      $servicio->setIdProveedor($id_proveedor);
      $servicio->setIdCategoriaServicio($_POST['catservicio']);
      $servicio->setTipoServicio($_POST['tiposervicio']);
      $servicio->setDescripcion($_POST['descripcion']);
      $servicio->setPrecio($_POST['precio']);
      $respuesta = $sm->insertarServicio($servicio);
      echo $respuesta;

      break;
  }



?>
 


