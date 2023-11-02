<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Campeones de League of Legends</title>
    </head>
    <body>
        <h1>Resultado de la encuesta sobre nuestro campeones</h1>
        <?php
            print("<h1>El formulario de PHP. Resultados del formulario</h1>\n");
            $nombre = $_REQUEST['nombre'];
            $apellidos = $_REQUEST['apellidos'];
            
            $campeon = $_POST['campeon'];
            //Impresion de los datos recogidos