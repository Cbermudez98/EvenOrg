<?php
  require_once("../model/eventoModel.php");
  class eventoController{
    public $idOrganizador;
    public $nombreEvento;
    public $tipoEvento;
    public $categoriaEvento;
    public $descripcionEvento;
    public $horaFechaInicio;
    public $horaFechaFin;
    public $lugar;
    public $costo;

    public function __construct(){
    
    }

    //getters
    public function getIdOrganizador(){
      return $this->idOrganizador;
    }

    public function getNombreEvento(){
      return $this->nombreEvento;
    }

    public function getCategoriaEvento(){
      return $this->categoriaEvento;
    }

    public function getTipoEvento(){
      return $this->tipoEvento;
    }

    public function getDescripcionEvento(){
      return $this->descripcionEvento;
    }

    public function getHoraFechaInicio(){
      return $this->horaFechaInicio;
    }

    public function getHoraFechaFin(){
      return $this->horaFechaFin;
    }
    
    public function getLugar(){
      return $this->lugar;
    }

    public function getCosto(){
      return $this->costo;
    }

    //Setters

    public function setIdOrganizador($idOrganizador){
      return $this->idOrganizador = $idOrganizador;
    }

    public function setNombreEvento($nombreEvento){
      return $this->nombreEvento = $nombreEvento;
    }

    public function setCategoriaEvento($categoriaEvento){
      return $this->categoriaEvento = $categoriaEvento;
    }

    public function setTipoEvento($tipoEvento){
      return $this->tipoEvento = $tipoEvento;
    }

    public function setDescripcionEvento($descripcionEvento){
      return $this->descripcionEvento = $descripcionEvento;
    }

    public function setHoraFechaInicio($horaFechaInicio){
      return $this->horaFechaInicio = $horaFechaInicio;
    }

    public function setHoraFechaFin($horaFechaFin){
      return $this->horaFechaFin = $horaFechaFin;
    }

    public function setLugar($lugar){
      return $this->lugar = $lugar;
    }

    public function setCosto($costo){
      return $this->costo = $costo;
    }
  }
  $op = "";
  if(isset($_POST['token'])){
    $op = $_POST['token'];
  }

  $em = new Evento();
  switch($op){
  case 'registrarEvento':
    session_start();
    $evento = new eventoController();
    $evento->setIdOrganizador($_SESSION['id']);
    $evento->setNombreEvento($_POST['nomevento']);
    $evento->setTipoEvento($_POST['tipoevento']);
    $evento->setCategoriaEvento($_POST['catevento']);
    $evento->setDescripcionEvento($_POST['descripcion_evento']);  
    $evento->setHoraFechaInicio($_POST['fechaHoraInicio']);
    $evento->setHoraFechaFin($_POST['fechaHoraFin']);
    $evento->setLugar($_POST['ubicacion']);
    $evento->setCosto($_POST['costo']);
    $res = $em->crearEvento($evento);
    
    if($res === "Exito"){
      echo $res;
      header("location: ../view/modules/template/index.php?pag=serviciosAdicionales");
    }
    break;
   

  }

  if(isset($_GET['token'])){
    
    $res = $em->eliminarEvento($_GET['token']);
    if($res === "Exito"){

      echo "<script>window.location.href='../view/modules/template/index.php?pag=consultarEvento'</script>";

    }
  }
  
  if(isset($_GET['asis'])){
    session_start();
    $ei = $_GET['asis'];
    $iu =  $_SESSION['id'];
    
    $res = $em->asistir($ei,$iu);
    if($res === "exito"){
      header("Location: ../view/modules/template/index.php?pag=asiste");

    }
  }

  if(isset($_GET['eliminar'])){
    $id = $_GET['eliminar'];

  }



?>
