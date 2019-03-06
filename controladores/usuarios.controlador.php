<?php
class ControladorUsuarios{

    static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "usuarios";
		$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
		return $respuesta;
	}
}