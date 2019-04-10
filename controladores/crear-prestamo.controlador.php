<?php

class ControladorCrearPrestamos{

    static public function ctrCrearPrestamo(){

		if(isset($_POST["nuevoCliente"])){

			if( preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCliente"]) &&
			    preg_match('/^[0-9]+$/', $_POST["nuevoDocumentoCliente"]) &&
			    preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) && 
			    preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"])&&
			    preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuarioCliente"])&&
          preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccionCliente"])&&
          preg_match('/^[0-9]+$/', $_POST["montoPrestamo"]) &&
          preg_match('/^[0-9]+$/', $_POST["plazoPrestamo"]) &&
          preg_match('/^[0-9.]+$/', $_POST["interesPrestamo"]) &&
          preg_match('/^[0-9]+$/', $_POST["cuotasMensuales"])){

			   	$tabla = "clientes";

			   	$datos = array("nombre"=>$_POST["nuevoCliente"],
					           "documento"=>$_POST["nuevoDocumentoCliente"],
					           "email"=>$_POST["nuevoEmail"],
								"telefono"=>$_POST["nuevoTelefono"],
							    "direccion"=>$_POST["nuevaDireccionCliente"],
					           "fecha_nacimiento"=>$_POST["nuevaFechaNacimiento"]);

				$respuesta = ModeloClientes::mdlIngresarCliente($tabla, $datos);

				$encriptar = crypt($_POST["nuevoPasswordCliente"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla2 = "usuarios";

				$datos2 = array("usuario" => $_POST["nuevoUsuarioCliente"],
											"password" => $encriptar,
											"perfil" => 2,
											"cliente"=>$_POST["nuevoDocumentoCliente"]);

								$respuestaUsuario = ModeloUsuarios::mdlIngresarUsuario($tabla2, $datos2);
								
								

								$tabla3 = "prestamos";
								
								$datos3 = array("nombre"=>$_POST["nuevoCliente"],
					           					"documento"=>$_POST["nuevoDocumentoCliente"],
					           					"email"=>$_POST["nuevoEmail"],
															"telefono"=>$_POST["nuevoTelefono"],
							    						"direccion"=>$_POST["nuevaDireccionCliente"],
					           					"fecha_nacimiento"=>$_POST["nuevaFechaNacimiento"]);

                


			   	if($respuesta == "ok" && $respuestaUsuario == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El cliente ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "clientes";

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

							window.location = "clientes";

							}
						})

			  	</script>';



			}

		}

	}
}