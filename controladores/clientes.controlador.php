<?php
class ControladorClientes{

    static public function ctrMostrarClientes($item, $valor){

		$tabla = "clientes";
		$respuesta = ModeloClientes::MdlMostrarClientes($tabla, $item, $valor);
		return $respuesta;
	}
}