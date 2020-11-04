<?php

    class viewModel{
        
        public function enlacesPaginasModel($enlacesModel){
            
            if ($enlacesModel === "ayuda" || $enlacesModel === "solicitarEvento" ||
            $enlacesModel === "iniciarsesion" || $enlacesModel === "registrarUsuario") {

                $module = "view/modules/".$enlacesModel.".php";

            }elseif($enlacesModel == "welcome"){

                $module = "view/modules/welcome.php";

            }else{

                $module = "view/modules/welcome.php";

            }

            return $module;
        }
    }
    

?>