<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="asset/css/style.css">
    </head>
    <body>
        <header>
            <h1>INDEX de Peliculas</h1>
            <a href="index.php">Ir a inicio</a>
        </header>
        <main>
            
            <table>
                <caption>Peliculas</caption>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>duracion</th>
                        <th>genero</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($peliculas)){
                            foreach ($peliculas as $id => $value) {
                                echo '<tr>';
                                echo '<td>'.$value['id'] .'</td>';
                                echo '<td>'.$value['nombre'] .'</td>';
                                echo '<td>'.$value['duracion'] .'</td>';
                                echo '<td>'.$value['genero'] .'</td>';

                                
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>   
        </main>
    </body>
</html>