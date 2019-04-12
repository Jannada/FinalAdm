<?php 

require_once "conexion.php";

class ModeloPrestamos{
    //Mostrar prestamos

    static public function mdlMostrarPrestamos($tabla, $item, $valor){
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

    static public function mdlCrearPrestamo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_cliente, id_usuario, monto, total, pendiente, tasa_interes, interes, cuotas) VALUES (:id_cliente, :id_usuario, :monto, :total, :pendiente, :tasa_interes, :interes, :cuotas)");

		$stmt->bindParam(":id_cliente", $datos["cliente"], PDO::PARAM_INT);
		$stmt->bindParam(":id_usuario", $datos["empleado"], PDO::PARAM_INT);
		$stmt->bindParam(":monto", $datos["monto"], PDO::PARAM_STR);
		$stmt->bindParam(":pendiente", $datos["pendiente"], PDO::PARAM_STR);
		$stmt->bindParam(":tasa_interes", $datos["tasaInteres"], PDO::PARAM_STR);
        $stmt->bindParam(":interes", $datos["interes"], PDO::PARAM_STR);
        $stmt->bindParam(":cuotas", $datos["plazo"], PDO::PARAM_STR);
        $stmt->bindParam(":total", $datos["total"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

    }
    
    static public function mdlCrearCuotas($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_prestamo, monto, capital, interes, fecha_pago, fecha_limite) VALUES (:id_prestamo, :monto, :capital, :interes, :fecha_pago, :fecha_limite)");

		$stmt->bindParam(":id_prestamo", $datos["idPrestamo"], PDO::PARAM_INT);
		$stmt->bindParam(":monto", $datos["monto"], PDO::PARAM_INT);
		$stmt->bindParam(":capital", $datos["capital"], PDO::PARAM_STR);
		$stmt->bindParam(":interes", $datos["interes"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_pago", $datos["fechaPago"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_limite", $datos["fechaLimite"], PDO::PARAM_STR);
    
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	static public function mdlSumaTotalPrestamos($tabla){	

		$stmt = Conexion::conectar()->prepare("SELECT SUM(monto) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}
		// Rango de fechas
	static public function mdlRangoFechasPrestamos($tabla, $fechaInicial, $fechaFinal){

		if($fechaInicial == null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();	


		}else if($fechaInicial == $fechaFinal){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha like '%$fechaFinal%'");

			$stmt -> bindParam(":fecha", $fechaFinal, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$fechaActual = new DateTime();
			$fechaActual ->add(new DateInterval("P1D"));
			$fechaActualMasUno = $fechaActual->format("Y-m-d");

			$fechaFinal2 = new DateTime($fechaFinal);
			$fechaFinal2 ->add(new DateInterval("P1D"));
			$fechaFinalMasUno = $fechaFinal2->format("Y-m-d");

			if($fechaFinalMasUno == $fechaActualMasUno){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha BETWEEN '$fechaInicial' AND '$fechaFinalMasUno'");

			}else{


				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha BETWEEN '$fechaInicial' AND '$fechaFinal'");

			}
		
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

	}
}
