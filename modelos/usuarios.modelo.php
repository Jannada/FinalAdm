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
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, usuario, password, id_perfil, id_empleado) VALUES (:nombre, :usuario, :password, :id_perfil, :id_empleado)");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
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
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
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
    
        //editar usuario

    static public function mdlEditarUsuario($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET password =:password WHERE usuario = :usuario");
        
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt-> close();

        $stmt = null;
    
    }
    // Borrar Usuario

    static public function mdlBorrarUsuario($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $datos, PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt-> close();

        $stmt = null;

    }
}