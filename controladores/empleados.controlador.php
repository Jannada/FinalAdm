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

	static public function ctrEditarEmpleado(){

		if(isset($_POST["editarEmpleado"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEmpleado"]) &&
				 preg_match('/^[0-9]+$/', $_POST["editarDocumento"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarDireccion"])){

					$tabla = "empleados";

				

				
				 $datos = array("nombre"=>$_POST["editarEmpleado"],
				 "id"=>$_POST["idEmpleado"],
				 "documento"=>$_POST["editarDocumento"],
				 "email"=>$_POST["editarEmail"],
				 "telefono"=>$_POST["editarTelefono"],
				 "direccion"=>$_POST["editarDireccion"],
				 "fecha_nacimiento"=>$_POST["editarFechaNacimiento"]);
				 

				$respuesta = ModeloEmpleados::mdlEditarEmpleado($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
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
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
							if (result.value) {

							window.location = "empleados";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR Empleado
	=============================================*/

	static public function ctrBorrarEmpleado(){

		if(isset($_GET["idEmpleado"])){

			$tabla ="empleados";
			$datos = $_GET["idEmpleado"];

			$respuesta = ModeloEmpleados::mdlBorrarEmpleado($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Empleado ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "empleados";

								}
							})

				</script>';

			}		

		}

	}


}