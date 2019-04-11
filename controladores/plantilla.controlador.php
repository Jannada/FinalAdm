<?php

class ControladorPlantilla{

    static public function ctrPlantilla(){

        include "vistas/plantilla.php";

    }	

    static public function ctrMostrarTasa($item, $valor){

        $tabla = "tasa";
		$respuesta = ModeloPlantilla::mdlMostrarTasa($tabla, $item, $valor);
		return $respuesta;

    }	
    
}