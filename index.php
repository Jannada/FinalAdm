<?php
    require_once "controladores/pagina-inicio.controlador.php";
    require_once "controladores/plantilla.controlador.php";
    require_once "modelos/plantilla.modelo.php";

    $plantilla = new ControladorPaginaInicio();
    $plantilla -> ctrPaginaInicio();
?>
