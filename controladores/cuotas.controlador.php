<?php
class ControladorCuotas{

    static public function ctrMostrarCuotas($item, $valor){

		$tabla = "cuotas";
		$respuesta = ModeloCuotas::mdlMostrarCuotas($tabla, $item, $valor);
		return $respuesta;
    }
}
?>