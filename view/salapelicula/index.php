<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="asset/css/style.css">
    </head>
    <body>
        <header>
            <h1>INDEX de salas_has_peliculas</h1>
            <a href="index.php">Ir a inicio</a>
        </header>
        <main>
            <table>
                <caption>salas_has_peliculas</caption>
                <thead>
                    <tr>
                        <th>Pelicula_id</th>
                        <th>Sala</th>
                        <th>Hora</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($salas_has_peliculas)){
                            foreach ($salas_has_peliculas as $id => $value) {
                                echo '<tr>';
                                
                                echo '<td>'.$value['pelicula_id'] .'</td>';
                                echo '<td>'.$value['sala'] .'</td>';
                                echo '<td>'.$value['hora'] .'</td>';


                                
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>   
            <?php
                if(isset($error)){
                    echo '<h3>'. $error . '</h3>';
                }
            ?>
        </main>
    </body>
</html>