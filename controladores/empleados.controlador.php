<?php
class ControladorEmpleados{

    static public function ctrMostrarEmpleados($item, $valor){

		$tabla = "empleados";
		$respuesta = ModeloEmpleados::MdlMostrarEmpleados($tabla, $item, $valor);
		return $respuesta;
	}
}