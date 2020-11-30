<?php

require('../db/db.php');

  class proveedorModel{
    private $db;

    public function __construct(){
      $this->db = Conectar::conexion();
    }  

    //Insertar proveedor en la base de datos

    public function insertarProveedor($proveedor){
      
      $id_usuario = $proveedor->getId_usuario();
      $cComercio = $proveedor->getCamara_comercio();
      $nMatricula = $proveedor->getNumero_matricula();
      $nit = $proveedor->getNit();
      $rSocial = $proveedor->getRazon_social();
      $tEmpresa = $proveedor->getTipo_empresa();
      $pais = $proveedor->getPais();
      $ciudad = $proveedor->getCiudad();
      $direccion = $proveedor->getDireccion();
      $telefono = $proveedor->getTelefono();
      $celular = $proveedor->getCelular();
      $correo = $proveedor->getCorreo();

      $sql = "INSERT INTO proveedor(id_usuario,camaraComercio,numeroMatricula,nit,razonSocial,tipoEmpresa,pais,ciudad,direccion,telefono
	,celular,correo) VALUES($id_usuario,'$cComercio','$nMatricula','$nit','$rSocial','$tEmpresa','$pais','$ciudad','$direccion',$telefono,$celular,
	'$correo')";

      if(mysqli_query($this->db, $sql)){
	$mensaje = "Exito";
      }else{
	$ensaje = "Error al insertar en la base de datos => ".mysqli_error($this->db);
      }
      
      return $mensaje;

    }

    public function consultaProveedor($idUsuario){
      $sql = "SELECT * FROM proveedor WHERE id_usuario = '.$idUsuario.'";
      $resultado = mysqli_query($this->db, $sql);
      
      if(mysqli_num_rows($resultado)>0){
	while($fila = mysqli_fetch_array($resultado)){
	  $_SESSION['id_proveedor'] = $fila['id'];
	  $mensaje = "true";
	}	
      }else{
	$mensaje = "false";
      }
    
      mysqli_close($this->db);
	return $mensaje;

    }

    public function consultaIdProveedor($idUsuario){
      $sql = "SELECT id from proveedor";
      $res = mysqli_query($this->db,$sql);
      if(mysqli_num_rows($res)>0){
	while($row = mysqli_fetch_array($res)){
	  $_SESSION['idproveedor'] = $row['id'];
	}
      }
      return $_SESSION['idproveedor'];
    }
  }

?>
