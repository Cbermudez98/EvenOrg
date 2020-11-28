<?php
require_once("../db/db.php");

  class Evento{
  
    private $db;

    public function __construct(){
      $this->db = Conectar::conexion();
    }

    public function crearEvento($evento){
      
     $i = $evento->getIdOrganizador();
     $n = $evento->getNombreEvento();
     $t = $evento->getTipoEvento();
     $c = $evento->getCategoriaEvento();
     $d = $evento->getDescripcionEvento();
     $f = $evento->getHoraFechaFin();
     $ff = $evento->getHoraFechaFin();
     $u = $evento->getLugar();
     $co = $evento->getCosto();
      //$sql = "INSERT INTO evento VALUES($idOrganizador,$tipo,$categoria,'".$descripcion."',$fechaInicio,$fechaFim,'".$ubicacion."',$costo)";
       $sql = "INSERT INTO evento (idOrganizador,nombreEvento,tipoEvento,categoriaEvento,descripcion,horaInicio,horaFin,lugar,costo) 
       VALUES($i,'$n',$t,$c,'$d','$f','$ff','$u',$co)";
      if(mysqli_query($this->db,$sql)){
	     $mensaje = "Exito";
      }else{
    	$mensaje = "Error al boorar evetno".mysqli_error($this->db);
      }
      return $mensaje;

    }	

    public function eliminarEvento($id){
      
      $sql = "DELETE FROM evento WHERE id = $id";
      if(mysqli_query($this->db, $sql)){
        
        $mensaje = "Exito";

      }else{

        $mensaje = "Error al eliminar evento => ".mysqli_error($this->db);

      }
      return $mensaje;

    }

    public function asistir($ie, $iu){
      $i = $ie;
      $u = $iu;
     
      
      $sql =  "INSERT INTO `asistente` (`id`, `id_evento`, `id_usuario`) VALUES (NULL, '$i', '$u')";
      
      if(mysqli_query($this->db,$sql)){
        $mensaje = "exito";
      }else{
        echo $sql;
        $mensaje = "Error = > ".mysqli_error($this->db);
      }
      return $mensaje;
    }

    public function eliminar($id,$ide){

      $sql = "DELETE FROM asistente WHERE id_evento = '$ide' AND id_usuario = '$id' ";

    }
  }
?>
