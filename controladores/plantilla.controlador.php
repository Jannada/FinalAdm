<?php

class ControladorPlantilla{

    static public function ctrMostrarTasa($item, $valor){

        $tabla = "tasa";
		$respuesta = ModeloPlantilla::mdlMostrarTasa($tabla, $item, $valor);
		return $respuesta;

    }	
    //editar Usuario
	static public function ctrEditarTasa(){

		if(isset($_POST["editarTasa"])){

			$tabla = "tasa";

            $datos = array( "tasa" => $_POST["editarTasa"],
            "id" => $_POST["editarTasa1"]);

			$respuesta = ModeloPlantilla::mdlEditarTasa($tabla, $datos);
			
			if($respuesta == "ok"){
				echo '<script>
				swal({
					type: "success",
					title: "!La tasa ha sido editada correctamente",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false 
				}).then(function(result){
					if(result.value){
						window.location="inicio";
					}
				});
				</script>';
			}
			}
    }
    
}