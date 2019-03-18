<?php
class ControladorEmpleados{

    static public function ctrMostrarEmpleados($item, $valor){

		$tabla = "empleados";
		$respuesta = ModeloEmpleados::mdlMostrarEmpleados($tabla, $item, $valor);
		return $respuesta;
	}

	/*=============================================
	CREAR CLIENTES
	=============================================*/

	static public function ctrCrearEmpleado(){

		if(isset($_POST["nuevoDocumento"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoEmpleado"]) &&
				 preg_match('/^[0-9]+$/', $_POST["nuevoDocumento"]) &&
				 preg_match('/^[0-9]+$/', $_POST["nuevoTelefono"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevoDireccion"])){

			   	$tabla = "empleados";

			   	$datos = array("nombre"=>$_POST["nuevoEmpleado"],
					           "documento"=>$_POST["nuevoDocumento"],
					           "email"=>$_POST["nuevoEmail"],
					           "telefono"=>$_POST["nuevoTelefono"],
										 "direccion"=>$_POST["nuevoDireccion"],
										 "perfil"=>$_POST["nuevoPerfil"],
										 "fecha_nacimiento"=>$_POST["nuevaFechaNacimiento"]);
										 

			   	$respuesta = ModeloEmpleados::mdlIngresarEmpleado($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El cliente ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "empleados";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "empleados";

							}
						})

			  	</script>';



			}

		}

	}
}