<?php
    session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>Laboratorio 12</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Manejo de sesiones</h1>
    <h2>Paso 3: la variable ya ha sido destruida y su valor se ha perdido</h2>
    <?php
    if( isset($_SESSION['var']) ) {
        $var = $_SESSION['var'];
    } else {
        $var = "";
    }
    print("<p>Valor de la variable de sesión: $var</p>\n");
    session_destroy();
    ?>
    <a href="lab121.php">Volver al paso 1</a>
</body>
</html>