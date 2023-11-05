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
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo_electronico = $_POST['correo'];
            $ciudad = $_POST['ciudad'];
            
            $campeon = $_POST['campeon'];
            $otrocampeon = $_POST['opcampeon'];

            //Impresion de los datos recogidos
            print ("<p>Los datos que se han introducido son:</p>\n");
            print ("<ul>\n");
            print ("<li> Nombre del usuario: $nombre \n");
            print ("<li> Apellidos del usuario: $apellidos \n");
            print ("<li> Correo electrónico: $correo_electronico \n");
            print ("<li> Ciudad: $ciudad \n");
            print ("<li> Campeón favorito: $campeon \n");
            print ("<li> Otro campeón: $otrocampeon \n");

            print ("</ul>\n");
?>