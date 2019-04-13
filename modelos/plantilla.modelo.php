<?php 

require_once "conexion.php";

class ModeloPlantilla{
    //Mostrar prestamos

    static public function mdlMostrarTasa($tabla, $item, $valor){
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

         //editar Tasa

         static public function mdlEditarTasa($tabla, $datos){
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tasa =:tasa WHERE id = :id");
            
            $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
            $stmt->bindParam(":tasa", $datos["tasa"], PDO::PARAM_STR);

    
            if($stmt->execute()){
                return "ok";
            }else{
                return "error";
            }
            $stmt-> close();
    
            $stmt = null;
        
        }
}
