<?php

    class viewModel{
        
        public function enlacesPaginasModel($enlacesModel){
            $module = $enlacesModel;
            if ($enlacesModel == "login") {
                $module = "view/modules/".$enlacesModel.".php";

            }elseif($enlacesModel == "welcome"){
                $module = "view/modules/".$enlacesModel.".php";
            }
            return $module;
        }
    }
    

?>