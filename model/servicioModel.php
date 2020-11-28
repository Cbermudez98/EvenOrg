<?php
require_once("../db/db.php");
  class servicioModel{
  
    private $db;

    public function __construct(){
      $this->db = Conectar::conexion();
    }

    public function insertarServicio($servicio){
      $idP = $servicio->getIdProveedor();
      $idC = $servicio->getIdCategoriaServicio();
      $tSe = $servicio->getTipoServicio();
      $des = $servicio->getDescripcion();
      $pre = $servicio->getPrecio();

      $sql = "INSERT INTO servicio(idProveedor,idServicio,tipoServicio,descripcion,valor) VALUES ($idP,$idC,'$tSe','$des',$pre)";

      $res = mysqli_query($this->db, $sql);
      if($res){
	$mensaje = "Exito en la insercion";
      }else{
	$mensaje = "Error al insertar".mysqli_error($this->db);
      }
      return $mensaje;
    }

    public function consultarServicio($id_proveedor){
      $idProveedor = $id_proveedor->getIdProveedor();
      $sql = "SELECT tipoServicio,descripcion,valor FROM servicio WHERE idProvedor = '$idProveedor'";

      $res = mysqli_query($this->db, $sql);
	
      if(mysqli_num_rows($res) > 0){
	$mensaje = "Hay datos";
      }else{
	$mensaje = "Aun no ha creado servicios";
      }

      return $mensaje;
    }

    public function eliminarServicio($id_servicio){
      $sql = "DELETE FROM servicio WHERE id=$id_servicio";
      if(mysqli_query($this->db, $sql)){
	$mensaje = "true";
      }else{
	$mensaje = "false";
      }
      return $mensaje;
    }
   
  }

?>
