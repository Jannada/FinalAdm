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
}

if(isset($_POST["idEmpleado"])){

    $empleado = new AjaxUsuarios();
    $empleado -> idEmpleado = $_POST["idEmpleado"];
    $empleado -> ajaxIngresarUsuario();
}