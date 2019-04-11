<?php
class ControladorPrestamos{

    static public function ctrMostrarPretamos($item, $valor){

		$tabla = "prestamos";
		$respuesta = ModeloPrestamos::mdlMostrarPrestamos($tabla, $item, $valor);
		return $respuesta;
		}
		
		static public function ctrCrearPrestamo(){

			var_dump("kk");

			if(isset($_POST["nuevoCliente"])){
				var_dump("25k");
	
				// if( preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCliente"]) &&
				// 		preg_match('/^[0-9]+$/', $_POST["nuevoDocumentoCliente"]) &&
				// 		preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) && 
				// 		preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"])&&
				// 		preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuarioCliente"])&&
				// 		preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccionCliente"])&&
				// 		preg_match('/^[0-9]+$/', $_POST["montoPrestamo"]) &&
				// 		preg_match('/^[0-9]+$/', $_POST["plazoPrestamo"]) &&
				// 		preg_match('/^[0-9.]+$/', $_POST["interesPrestamo"]) &&
				// 		preg_match('/^[0-9]+$/', $_POST["cuotasMensuales"])){
	
				// 		 $tabla = "clientes";
	
				// 		 $datos = array("nombre"=>$_POST["nuevoCliente"],
				// 							 "documento"=>$_POST["nuevoDocumentoCliente"],
				// 							 "email"=>$_POST["nuevoEmail"],
				// 								"telefono"=>$_POST["nuevoTelefono"],
				// 								"sexo"=>$_POST["genero"],
				// 								"direccion"=>$_POST["nuevaDireccionCliente"],
				// 							 	"fecha_nacimiento"=>$_POST["nuevaFechaNacimiento"]);
	
				// 	$respuesta = ModeloClientes::mdlIngresarCliente($tabla, $datos);
	
				// 	$encriptar = crypt($_POST["nuevoPasswordCliente"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
	
				// 	$tabla2 = "usuarios";
	
				// 	$datos2 = array("usuario" => $_POST["nuevoUsuarioCliente"],
				// 								"password" => $encriptar,
				// 								"perfil" => 2,
				// 								"cliente"=>$_POST["nuevoDocumentoCliente"]);
	
				// 					$respuestaUsuario = ModeloUsuarios::mdlIngresarUsuario($tabla2, $datos2);

				// 					$total = floatval($_POST["montoPrestamo"])+floatval($_POST["interesPrestamo"]);
	
				// 					$tabla3 = "prestamos";
									
				// 					$datos3 = array("cliente"=>$_POST["nuevoDocumentoCliente"],
				// 												 "empleado"=>$_POST["nuevoDocumentoCliente"],
				// 												 "monto"=>$_POST["montoPrestamo"],
				// 												"pendiente"=>$total,
				// 												"total"=>$total,
				// 												"tasaInteres"=>$_POST["tasaInteres"],
				// 												 "interes"=>$_POST["interesPrestamo"],
				// 												 "plazo"=>$_POST["plazoPrestamo"]);

				// 				$respuestaPrestamo = ModeloPrestamos::mdlCrearPrestamo($tabla2, $datos2);						 
	
									/*************************
									 * LOGICA PARA CUOTAS * 
									 *************************/

									//  $plazo= $_POST["plazoPrestamo"];
									//  $cuotas= $_POST["cuotasMensuales"];
									//  $interes= $_POST["interesPrestamo"];
									//  $tasa = (floatval($_POST["tasaInteres"])/100)/12;
									//  $monto= $_POST["montoPrestamo"];
									//  $fechaIn=strtotime($_POST["fechaInicioPago"]);
									//  $fechaIn2=date("y/m/d", $fechaIn);
									//  $fechaFin=strtotime($_POST["fechaFinPago"]);
									//  $fechaFin2 = date("y/m/d", $fechaFin);

									// for ($i=0; $i <$plazo ; $i++) { 
										
									// 	$tabla3 = "cuotas";

									// 	$fechasIn = date("y/m/d",strtotime($fechaIn2."+".$i."month"));
									// 	$fechasFin = date("y/m/d",strtotime($fechaFin2."+".$i."month"));
									// 	$interesMen = $monto*$tasa;
									// 	$capital = $cuotas-$interesMen;

									// 	$datos3 = array("empleado"=>$_POST["empleadoId"],
									// 							 "idPrestamo"=>$_POST["prestamoId"],
									// 							"monto"=>$cuotas,
									// 							"capital"=>$capital,
									// 							"interes"=>$interesMen,
									// 							 "fechaPago"=>$fechasIn,
									// 							 "fechaLimite"=>$fechasFin);

									// 							//  $respuestaPrestamo = ModeloPrestamos::mdlCrearPrestamo($tabla2, $datos2);

									// 							var_dump($datos3["fechaPago"]);
									// 							var_dump($datos3["fechaLimite"]);

									// 							$monto-=$cuotas;

									// }
	
	
				// 		 if($respuesta == "ok" && $respuestaUsuario == "ok"){
	
				// 		echo'<script>
	
				// 		swal({
				// 				type: "success",
				// 				title: "El cliente ha sido guardado correctamente",
				// 				showConfirmButton: true,
				// 				confirmButtonText: "Cerrar"
				// 				}).then(function(result){
				// 						if (result.value) {
	
				// 						window.location = "clientes";
	
				// 						}
				// 					})
	
				// 		</script>';
	
				// 	}
	
				// }else{
	
				// 	echo'<script>
	
				// 		swal({
				// 				type: "error",
				// 				title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
				// 				showConfirmButton: true,
				// 				confirmButtonText: "Cerrar"
				// 				}).then(function(result){
				// 				if (result.value) {
	
				// 				window.location = "clientes";
	
				// 				}
				// 			})
	
				// 		</script>';
	
	
	
				// }
	
			}
	
		}
}
