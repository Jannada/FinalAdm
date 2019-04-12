<?php 

require_once "conexion.php";

class ModeloRecibos{
    //Mostrar prestamos

    static public function mdlMostrarRecibos($tabla, $item, $valor){
        if($item!=null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
        }
        $stmt-> close();
        $stmt = null;
    }

    /*=============================================
	ACTUALIZAR PRODUCTO
	=============================================*/

	static public function mdlActualizarProducto($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

    }
    
    static public function mdlCrearFactura($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, id_cliente, id_empleado, id_prestamo, capital, interes, mora, total_pagado, forma_pago, referencia_f_pago) VALUES (:codigo, :id_cliente, :id_empleado, :id_prestamo, :capital, :interes,  :mora, :total_pagado, :forma_pago, :referencia_f_pago)");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
		$stmt->bindParam(":id_cliente", $datos["id_cliente"], PDO::PARAM_INT);
		$stmt->bindParam(":id_empleado", $datos["id_empleado"], PDO::PARAM_STR);
		$stmt->bindParam(":id_prestamo", $datos["id_prestamo"], PDO::PARAM_STR);
		$stmt->bindParam(":capital", $datos["capital"], PDO::PARAM_STR);
        $stmt->bindParam(":interes", $datos["interes"], PDO::PARAM_STR);
        $stmt->bindParam(":mora", $datos["mora"], PDO::PARAM_STR);
		$stmt->bindParam(":total_pagado", $datos["totalPagado"], PDO::PARAM_STR);
		$stmt->bindParam(":forma_pago", $datos["formaPago"], PDO::PARAM_STR);
        $stmt->bindParam(":referencia_f_pago", $datos["referenciaPago"], PDO::PARAM_STR);
    
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

    }
    
    static public function mdlCrearDetalle($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo_recibo, id_prestamo, detalle_cuota, capital, interes, mora) VALUES (:codigo_recibo, :id_prestamo, :detalle_cuota, :capital, :interes, :mora)");

		$stmt->bindParam(":codigo_recibo", $datos["idPrestamo"], PDO::PARAM_INT);
		$stmt->bindParam(":id_prestamo", $datos["monto"], PDO::PARAM_INT);
		$stmt->bindParam(":detalle_cuota", $datos["capital"], PDO::PARAM_STR);
		$stmt->bindParam(":capital", $datos["interes"], PDO::PARAM_STR);
		$stmt->bindParam(":interes", $datos["fechaPago"], PDO::PARAM_STR);
        $stmt->bindParam(":mora", $datos["fechaLimite"], PDO::PARAM_STR);
    
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
}

?>