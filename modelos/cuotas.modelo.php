<?php 

require_once "conexion.php";

class ModeloCuotas{
    //Mostrar prestamos

    static public function mdlMostrarCuotas($tabla, $item, $valor){
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

	static public function mdlActualizarCuota($tabla, $valor2, $valor1){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET estado = :estado, mora = :mora, WHERE id_prestamo = :id_prestamo");

        $stmt -> bindParam(":id_categoria", $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id_prestamo", $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}
}

?>