<?php
class ControladorRecibos{

    static public function ctrMostrarRecibos($item, $valor){

		$tabla = "recibo";
		$respuesta = ModeloRecibos::mdlMostrarRecibos($tabla, $item, $valor);
		return $respuesta;
    }
}
?>