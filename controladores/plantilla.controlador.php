<?php

class ControladorPlantilla{


    static public function ctrMostrarTasa($item, $valor){

        $tabla = "tasa";
		$respuesta = ModeloPlantilla::mdlMostrarTasa($tabla, $item, $valor);
		return $respuesta;

    }	
    
}