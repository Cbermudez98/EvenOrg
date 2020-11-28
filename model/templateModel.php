<?php

  class templateModel{
    
    public function enlacesTemplate($enlacesTemplate){

    if($enlacesTemplate === "formProveedor" || $enlacesTemplate === "formServicios"
     || $enlacesTemplate === "formConsultarservicio" || $enlacesTemplate === "crearEvento" 
     || $enlacesTemplate === "consultarEvento" || $enlacesTemplate === "serviciosAdicionales" || $enlacesTemplate === "eventosDinamicos" || $enlacesTemplate == "asiste"){
	$module = $enlacesTemplate.".php";
    }elseif($enlacesTemplate === "welcome"){

      $module = $enlacesTemplate.".php"; 
//	$module = "../welcome.php";
    }elseif($enlacesTemplate === "" || $enlacesTemplate !== ""){
      $module = "404.php";
    }else{
      $module = "404.php";
    }
      return $module;
    }
  
  }

?>
