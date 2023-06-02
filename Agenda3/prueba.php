<?php
    require_once('./test.php');
    require_once('./consultas.php');

    $mensaje = "Error";

    $consultas = new Consultas();
    $mensaje = $consultas->agregarContacto("Pedro", "A", "1234567890", "@");

    echo $mensaje;
?>