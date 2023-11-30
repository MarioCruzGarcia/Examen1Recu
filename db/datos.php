<?php
    /**
     * Fichero datos.php sera utilizado unicamente con datos de prueba para el tratamiento de los datos.
     * No hay acceso a base de datos.
     */
    $cine = array(
        'peliculas' => array(
            1 => array('id' => 5,"nombre" => "Indiana Jones y El Dial del Destino", "duracion" => 120, "genero" => "Acción"),
            2 => array('id' => 7,"nombre" => "Campeonex", "duracion" => 110, "genero" => "Comedia"),
            3 => array('id' => 3,"nombre" => "Oppenheimer", "duracion" => 95, "genero" => "Historia"),
            4 => array('id' => 8,"nombre" => "The Marvels", "duracion" => 130, "genero" => "Ciencia Ficción"),
            5 => array('id' => 2,"nombre" => "Vida Perra", "duracion" => 105, "genero" => "Animación"),
            6 => array('id' => 1,"nombre" => "Mirando al Cielo", "duracion" => 115, "genero" => "Drama"),
            7 => array('id' => 14,"nombre" => "La Monja II", "duracion" => 125, "genero" => "Terror")
        ),
        'salas' => array(
            "Sala Londres" => array("planta" => 1, "capacidad" => 100),
            "Sala Madrid" => array("planta" => 2, "capacidad" => 80),
            "Sala New York" => array("planta" => 1, "capacidad" => 120)
        ),
        'salas_has_peliculas' => array(
            array("pelicula_id" => 1, "sala" => "Sala Londres", "hora" => "15:00"),
            array("pelicula_id" => 14, "sala" => "Sala Madrid", "hora" => "16:30"),
            array("pelicula_id" => 9, "sala" => "Sala Londres", "hora" => "18:00"),
            array("pelicula_id" => 2, "sala" => "Sala New York", "hora" => "20:15"),
            array("pelicula_id" => 5, "sala" => "Sala Madrid", "hora" => "21:45")
        )
    );
?>