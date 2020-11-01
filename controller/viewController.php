<?php
    
    class viewController{

        public function index(){
            include "view/modules/welcome.php";
        }

        public function enlacesPaginasController(){
            if (isset($_GET['action'])) {
                $enlacesController = $_GET['action'];
            }else{
                $enlacesController = 'welcome';
            }

            $respuesta = viewModel::enlacesPaginasModel($enlacesController);
            include $respuesta;
        }
    }

?>