<?php
class ControladorPrestamos{

    static public function ctrMostrarPretamos($item, $valor){

		$tabla = "prestamos";
		$respuesta = ModeloPrestamos::mdlMostrarPrestamos($tabla, $item, $valor);
		return $respuesta;
		}

		static public function ctrMostrarTasa($item, $valor){

			$tabla = "tasa";
			$respuesta = ModeloPlantilla::mdlMostrarTasa($tabla, $item, $valor);
			return $respuesta;

	}	
		
		static public function ctrCrearPrestamo(){

			if(isset($_POST["nuevoCliente"])){
	
				if( preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCliente"]) &&
						preg_match('/^[0-9]+$/', $_POST["nuevoDocumentoCliente"]) &&
						preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) && 
						preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"])&&
						preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuarioCliente"])&&
						preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccionCliente"])&&
						preg_match('/^[.0-9]+$/', $_POST["montoPrestamo"]) &&
						preg_match('/^[.0-9]+$/', $_POST["plazoPrestamo"]) &&
						preg_match('/^[.0-9]+$/', $_POST["interesPrestamo"]) &&
						preg_match('/^[.0-9]+$/', $_POST["cuotasMensuales"])){
	
						 $tabla = "clientes";
	
						 $datos = array("nombre"=>$_POST["nuevoCliente"],
											 "documento"=>$_POST["nuevoDocumentoCliente"],
											 "email"=>$_POST["nuevoEmail"],
												"telefono"=>$_POST["nuevoTelefono"],
												"sexo"=>$_POST["genero"],
												"direccion"=>$_POST["nuevaDireccionCliente"],
											 	"fecha_nacimiento"=>$_POST["nuevaFechaNacimiento"]);
	
					$respuesta = ModeloClientes::mdlIngresarCliente($tabla, $datos);
	
					$encriptar = crypt($_POST["nuevoPasswordCliente"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
	
					$tabla2 = "usuarios";
	
					$datos2 = array("nombre" => $_POST["nuevoCliente"],
												"usuario" => $_POST["nuevoUsuarioCliente"],
												"password" => $encriptar,
												"perfil" => 2,
												"cliente"=>$_POST["nuevoDocumentoCliente"]);
	
						$respuestaUsuario = ModeloUsuarios::mdlIngresarUsuario($tabla2, $datos2);


						/****************
						 * GARANTE *
						 ****************/

						 if($_POST["nuevoGarante"]!=""){

						$tabla5 = "garante";
	
						$datos5 = array("nombre"=>$_POST["nuevoGarante"],
											"documento"=>$_POST["nuevoDocumentoGarante"],
											"email"=>$_POST["nuevoEmailGarante"],
											 "telefono"=>$_POST["nuevoTelefonoGarante"],
											 "direccion"=>$_POST["nuevaDireccionGarante"],
											 "cliente"=>$_POST["nuevoDocumentoCliente"],
												"fecha_nacimiento"=>$_POST["nuevaFechaNacimientoGarante"]);
 
				 $respuesta = ModeloClientes::mdlIngresarGarante($tabla5, $datos5);

						 }
							

				 /****************
						 * PRESTAMO *
					****************/

									$total = floatval($_POST["montoPrestamo"])+floatval($_POST["interesPrestamo"]);
	
									$tabla3 = "prestamos";
									
									$datos3 = array("cliente"=>$_POST["nuevoDocumentoCliente"],
																 "empleado"=>$_POST["empleadoId"],
																 "monto"=>$_POST["montoPrestamo"],
																"pendiente"=>$total,
																"total"=>$total,
																"tasaInteres"=>$_POST["tasaInteres"],
																 "interes"=>$_POST["interesPrestamo"],
																 "plazo"=>$_POST["plazoPrestamo"]);

								$respuestaPrestamo = ModeloPrestamos::mdlCrearPrestamo($tabla3, $datos3);						 
	
									/*************************
									 * LOGICA PARA CUOTAS * 
									 *************************/

									 $plazo= $_POST["plazoPrestamo"];
									 $cuotas= $_POST["cuotasMensuales"];
									 $interes= $_POST["interesPrestamo"];
									 $tasa = (float)$_POST["tasaInteres"];
									 $tasa1 = ($tasa/100)/12;
									 $monto= $_POST["montoPrestamo"];
									 $fechaIn=strtotime($_POST["fechaInicioPago"]);
									 $fechaIn2=date("y-m-d", $fechaIn);
									 $fechaFin=strtotime($_POST["fechaFinPago"]);
									 $fechaFin2 = date("y-m-d", $fechaFin);

									for ($i=0; $i <$plazo ; $i++) { 
										
										$tabla4 = "cuotas";

										$fechasIn = date("y-m-d",strtotime($fechaIn2."+".$i."month"));
										$fechasFin = date("y-m-d",strtotime($fechaFin2."+".$i."month"));
										$interesMen = $monto*$tasa1;
										$capital = $cuotas-$interesMen;

										$datos4 = array(
																 "idPrestamo"=>$_POST["prestamoId"],
																"monto"=>$cuotas,
																"capital"=>$capital,
																"interes"=>$interesMen,
																 "fechaPago"=>$fechasIn,
																 "fechaLimite"=>$fechasFin);

																 $respuestaCuotas = ModeloPrestamos::mdlCrearCuotas($tabla4, $datos4);

																$monto-=$cuotas;


									}
	
	
						 if($respuesta == "ok" && $respuestaUsuario == "ok" && $respuestaCuotas == "ok" && $respuestaPrestamo == "ok"){
	
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
		/*=============================================
	SUMA TOTAL VENTAS
	=============================================*/

	public function ctrSumaTotalPrestamos(){

		$tabla = "prestamos";

		$respuesta = ModeloPrestamos::mdlSumaTotalPrestamos($tabla);

		return $respuesta;

	}
}
