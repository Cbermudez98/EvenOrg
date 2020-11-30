<?php
    
    class viewController{

        public function index(){
            include "view/modules/index.php";
        }

        public function enlacesPaginasController(){

           if (isset($_GET['action'])) {
               $enlacesController = $_GET['action'];
           }else{
               $enlacesController = "welcome";
           }
           

            $respuesta = viewModel::enlacesPaginasModel($enlacesController);
            include $respuesta;
        }
    }

?>
