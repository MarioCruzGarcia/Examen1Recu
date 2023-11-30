<?php
require_once 'Controller.php';
require_once 'db/datos.php';

class PeliculaController implements Controller{

    
    public static function index(){
       
        $peliculas = $GLOBALS['peliculas'];
        
        include 'view/pelicula/index.php';
    }

   
}
?>