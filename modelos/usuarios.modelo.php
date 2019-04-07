<?php 
require_once "conexion.php";
class ModeloUsuarios{
    //Mostrar usuarios
    static public function mdlMostrarUsuarios($tabla, $item, $valor){
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
    static public function mdlMostrarPerfil($tabla, $item, $valor){
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
    static public function mdlIngresarUsuario($tabla, $datos){
        if($datos["perfil"]!=2){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, id_perfil, id_empleado) VALUES (:usuario, :password, :id_perfil, :id_empleado)");
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id_perfil", $datos["perfil"], PDO::PARAM_STR);
        $stmt->bindParam(":id_empleado", $datos["empleado"], PDO::PARAM_STR);
		
		if($stmt->execute()){
			return "ok";	
		}else{
			return "error";
		
        }
    }else{
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, id_perfil, id_cliente) VALUES (:usuario, :password, :id_perfil, :id_cliente)");
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id_perfil", $datos["perfil"], PDO::PARAM_STR);
        $stmt->bindParam(":id_cliente", $datos["cliente"], PDO::PARAM_STR);
		
		if($stmt->execute()){
			return "ok";	
		}else{
			return "error";
		
        }
    }
		$stmt->close();
		
		$stmt = null;
	}
}