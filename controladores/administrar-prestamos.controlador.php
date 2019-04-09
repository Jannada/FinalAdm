<?php
class ControladorPrestamos{

    static public function ctrMostrarPretamos($item, $valor){

		$tabla = "prestamos";
		$respuesta = ModeloPrestamos::mdlMostrarPrestamos($tabla, $item, $valor);
		return $respuesta;
	}
?>