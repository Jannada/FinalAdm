<?php

    require_once "controladores/plantilla.controlador.php";
    require_once "controladores/usuarios.controlador.php";
    require_once "controladores/empleados.controlador.php";
    require_once "controladores/clientes.controlador.php";
    require_once "controladores/crear-prestamo.controlador.php";

    require_once "modelos/usuarios.modelo.php";
    require_once "modelos/empleados.modelo.php";
    require_once "modelos/clientes.modelo.php";
    require_once "modelos/crear-prestamo.modelo.php";

    $plantilla = new ControladorPlantilla();
    $plantilla -> ctrPlantilla();
?>
