<?php

    class viewModel{
        
        public function enlacesPaginasModel($enlacesModel){
            
            if ($enlacesModel === "ayuda" || $enlacesModel === "solicitarEvento" ||
	      $enlacesModel === "iniciarsesion" || $enlacesModel === "registrarUsuario" || $enlacesModel === "nuestrosLugares" 
	      || $enlacesModel ==="perfil" || $enlacesModel === "terminosCondiciones" || $enlacesModel === "provedores" || $enlacesModel === "movilidadTransporte" || $enlacesModel === "desarrolladores" || $enlacesModel === "blog" || $enlacesModel === "proveedores" || $enlacesModel === "comoFunciona" || $enlacesModel === "cuantoCuesta" || $enlacesModel === "dondeEntrada" || $enlacesModel === "comoPonerseContacto") {

                $module = "view/modules/".$enlacesModel.".php";

            }elseif($enlacesModel == "welcome"){

                $module = "view/modules/welcome.php";

            }elseif($enlacesModel === "" || $enlacesModel !== ""){

                $module = "view/modules/404.php";

	    }else{
	      $module = "view/modules/welcome.php";
	    }

            return $module;
        }
    }
    

?>
