<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

require_once "../controladores/empleados.controlador.php";
require_once "../modelos/empleados.modelo.php";

class AjaxUsuarios{

    public $idEmpleado;
    
    public function ajaxIngresarUsuario(){
        $item = "id"; 
        $valor = $this -> idEmpleado;
        $respuesta=ControladorEmpleados::ctrMostrarEmpleados($item, $valor);
        echo json_encode($respuesta);
    }

    public $idPerfil;
    
    public function ajaxIngresarPerfil(){
        $item = "id"; 
        $valor = $this -> idPerfil;
        $respuestaPerfil=ControladorUsuarios::ctrMostrarPerfil($item, $valor);
        echo json_encode($respuestaPerfil);
    }
}

if(isset($_POST["idEmpleado"])){

    $empleado = new AjaxUsuarios();
    $empleado -> idEmpleado = $_POST["idEmpleado"];
    $empleado -> ajaxIngresarUsuario();
}

if(isset($_POST["idPerfil"])){

    $perfil = new AjaxUsuarios();
    $perfil -> idPerfil = $_POST["idPerfil"];
    $perfil -> ajaxIngresarPerfil();
}