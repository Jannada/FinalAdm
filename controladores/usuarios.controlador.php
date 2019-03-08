<?php
class ControladorUsuarios{

    static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "usuarios";
		$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
		return $respuesta;
	}

	static public function ctrMostrarPerfil($item, $valor){

		$tabla = "perfil";
		$respuesta = ModeloUsuarios::MdlMostrarPerfil($tabla, $item, $valor);
		return $respuesta;
	}
	static public function crtIngresoUsuario($item, $valor){
		
	}

}