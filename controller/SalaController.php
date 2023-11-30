<?php
require_once 'Controller.php';
require_once 'db/datos.php';

class SalaController implements Controller{

    
    public static function index(){
       
        $salas = $GLOBALS['salas'];

        
        include 'view/sala/index.php';
    }


}
?>