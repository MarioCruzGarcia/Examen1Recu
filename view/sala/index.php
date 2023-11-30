<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="asset/css/style.css">
    </head>
    <body>
        <header>
            <h1>INDEX de Salas</h1>
            <a href="index.php">Ir a inicio</a>
        </header>
        <main>
            <table>
                <caption>Salas</caption>
                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>planta</th>
                        <th>capacidad</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($salas)){
                            foreach ($salas as $id => $value) {
                                echo '<tr>';
                                echo '<td>'. $id.'</td>';
                                echo '<td>'.$value['planta'] .'</td>';
                                echo '<td>'.$value['capacidad'] .'</td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>   
        </main>
    </body>
</html>