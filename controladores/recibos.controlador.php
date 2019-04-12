<?php
class ControladorRecibos{

    static public function ctrMostrarRecibos($item, $valor){

		$tabla = "recibo";
		$respuesta = ModeloRecibos::mdlMostrarRecibos($tabla, $item, $valor);
		return $respuesta;
		}
		
		static public function ctrCrearFactura(){

			if(isset($_POST["nuevaVenta"])){

				/*=============================================
				ACTUALIZAR LAS COMPRAS DEL CLIENTE Y REDUCIR EL STOCK Y AUMENTAR LAS VENTAS DE LOS PRODUCTOS
				=============================================*/
	
				if($_POST["listaProductos"] == ""){
	
						echo'<script>
	
					swal({
							type: "error",
							title: "La venta no se ha ejecuta si no hay productos",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							}).then(function(result){
									if (result.value) {
	
									window.location = "crear-factura";
	
									}
								})
	
					</script>';
	
					return;
				}
	
	
				$listaProductos = json_decode($_POST["listaProductos"], true);
				
				$totalProductosComprados = array();
	
				// foreach ($listaProductos as $key => $value) {
	
				// 	 array_push($totalProductosComprados, $value["cantidad"]);
					
				// 	 $tablaProductos = "productos";
	
				// 		$item = "id";
				// 		$valor = $value["id"];
				// 		$orden = "id";
	
				// 		$traerProducto = ModeloProductos::mdlMostrarProductos($tablaProductos, $item, $valor, $orden);
	
				// 	$item1a = "ventas";
				// 	$valor1a = $value["cantidad"] + $traerProducto["ventas"];
	
				// 		$nuevasVentas = ModeloProductos::mdlActualizarProducto($tablaProductos, $item1a, $valor1a, $valor);
	
				// 	$item1b = "stock";
				// 	$valor1b = $value["stock"];
	
				// 	$nuevoStock = ModeloProductos::mdlActualizarProducto($tablaProductos, $item1b, $valor1b, $valor);
	
				// }

				foreach ($listaProductos as $key => $value2) {

					$datos2 = array("id"=>$value2["id"],
								 "estado"=>1,
								 "mora"=>$value2["cantidad"]);

					$tablaCuotas="cuotas";
					$valor1b = $datos2;
					
					
					$RespuestaCuotas = ModeloCuotas::mdlActualizarCuota($tablaCuotas, $valor1b);
					
				}

				 $idPrestamo=($value2["prestamo"]);
				
	
				// $tabla = "prestamos";
	
				// $item = null;
				// $valor = null;
	
				// $traerPrestamo = ModeloPrestamos::mdlMostrarPrestamos($tabla, $item, $valor);

				// for ($i=0;$i<count($traerPrestamo);$i++) {
				// 	if($idPrestamo==$traerPrestamo[$i]["id"]){

				// 	$pendiente=($traerPrestamo[$i]["pendiente"]);
				// 	$id=($traerPrestamo[$i]["id"]);
				// 	}
				// }

				// $entero = $_POST("nuevoPrecioNeto");

				// $calculo = $pendiente - $entero; 
				

				// $tabla25 ="prestamos";
				// $item1a = "pendiente";
				// $valor1 = $calculo;
				// $valor1a = $id;

	
				// $respuestaPrestamo = ModeloPrestamos::mdlActualizarPrestamos($tabla25, $item1a, $valor1, $valor1a);

			
	
				// $item1b = "ultima_compra";
	
				// date_default_timezone_set('America/Bogota');
	
				// $fecha = date('Y-m-d');
				// $hora = date('H:i:s');
				// $valor1b = $fecha.' '.$hora;
	
				// $fechaCliente = ModeloClientes::mdlActualizarCliente($tablaClientes, $item1b, $valor1b, $valor);
	
				/*=============================================
				GUARDAR LA COMPRAR
				=============================================*/	
	
				$tabla52 = "recibo";
	
				$datos = array("codigo"=>$_POST["nuevaVenta"],
								 "id_cliente"=>"00105248752",
								 "id_empleado"=>$_POST["idEmpleado"],
								 "id_prestamo"=>$idPrestamo,
								 "capital"=>$_POST["nuevoPrecioCapital"],
								 "interes"=>$_POST["nuevoPrecioInteres"],
								 "mora"=>$_POST["nuevoPrecioImpuesto"],
								 "totalPagado"=>$_POST["totalVenta"],
								 "formaPago"=>$_POST["nuevoMetodoPago"],
								 "referenciaPago"=>$_POST["listaMetodoPago"]);
	
				$respuesta = ModeloRecibos::mdlCrearFactura($tabla52, $datos);
	
				if($respuesta == "ok"){
	
					echo'<script>
	
					swal({
							type: "success",
							title: "La venta ha sido guardada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							}).then(function(result){
									if (result.value) {
	
									window.location = "crear-factura";
	
									}
								})
	
					</script>';
	
				}
	
			}
	
		}
}
?>