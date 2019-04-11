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
}
