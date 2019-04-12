<?php

require_once "../controladores/cuotas.controlador.php";
require_once "../modelos/cuotas.modelo.php";

class AjaxProductos{
  
    /*=============================================
    EDITAR PRODUCTO
    =============================================*/ 
  
    public $idProducto;
    public $traerProductos;
    public $nombreProducto;
  
    public function ajaxEditarProducto(){
  
      if($this->traerProductos == "ok"){
  
        $item = null;
        $valor = null;
        $orden = "id";
  
        $respuesta = ControladorCuotas::ctrMostrarCuotas($item, $valor,
          $orden);
  
        echo json_encode($respuesta);
  
  
      }else if($this->nombreProducto != ""){
  
        $item = "descripcion";
        $valor = $this->nombreProducto;
        $orden = "id";
  
        $respuesta = ControladorCuotas::ctrMostrarCuotas($item, $valor,
          $orden);
  
        echo json_encode($respuesta);
  
      }else{
  
        $item = "id";
        $valor = $this->idProducto;
        $orden = "id";
  
        $respuesta = ControladorCuotas::ctrMostrarCuotas($item, $valor,
          $orden);
  
        echo json_encode($respuesta);
  
      }
  
    }
  
  }
  
  /*=============================================
  EDITAR PRODUCTO
  =============================================*/ 
  
  if(isset($_POST["idProducto"])){
  
    $editarProducto = new AjaxProductos();
    $editarProducto -> idProducto = $_POST["idProducto"];
    $editarProducto -> ajaxEditarProducto();
  
  }
  
  /*=============================================
  TRAER PRODUCTO
  =============================================*/ 
  
  if(isset($_POST["traerProductos"])){
  
    $traerProductos = new AjaxProductos();
    $traerProductos -> traerProductos = $_POST["traerProductos"];
    $traerProductos -> ajaxEditarProducto();
  
  }
  
  /*=============================================
  TRAER PRODUCTO
  =============================================*/ 
  
  if(isset($_POST["nombreProducto"])){
  
    $traerProductos = new AjaxProductos();
    $traerProductos -> nombreProducto = $_POST["nombreProducto"];
    $traerProductos -> ajaxEditarProducto();
  
  }
  
  