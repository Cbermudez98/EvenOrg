<?php

  Class templateController{
    public function index(){
      
      include "template.php";
    }

    public function paginasTemplate(){
      if(isset($_GET['pag'])){
        $enlacesTemplate = $_GET['pag'];
      }else{
	$enlacesTemplate = "welcome";
      }

      $respuesta = templateModel::enlacesTemplate($enlacesTemplate);
      include $respuesta;
    }
  }

?>
