<?php

require_once 'controller/PeliculaController.php';
require_once 'controller/SalaController.php';
require_once 'controller/SalapeliculaController.php';


require_once 'db/datos.php'; 
$GLOBALS['peliculas'] = $cine['peliculas'];
$GLOBALS['salas'] = $cine['salas'];
$GLOBALS['salas_has_peliculas'] = $cine['salas_has_peliculas'];




if(isset($_GET['controller']) && isset($_GET['function'])){
    # $controller contiene 'pelicula'
    $controller = $_GET['controller'];

    
    $controller = $controller.'Controller';

    
    $controller = ucfirst($controller);

    
    $function = $_GET['function'];

     if (class_exists($controller)) {
        
        if(method_exists($controller, $function)){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                call_user_func($controller .'::'.$function, $id);
            }else{
                call_user_func($controller .'::'.$function);
            }
        }
    }
}else{
   include('view/index.php');
}
?>