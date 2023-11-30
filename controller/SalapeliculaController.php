<?php
require_once 'Controller.php';
require_once 'db/datos.php';

class SalapeliculaController implements Controller{

    
    public static function index(){
        
        $salas_has_peliculas = $GLOBALS['salas_has_peliculas'];

        include 'view/salapelicula/index.php';
    }

   
}
?>