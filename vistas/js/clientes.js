 /*=============================================
	CREAR USUARIO AUTOMATICO
=============================================*/

$(document).on("change", "#nuevoDocumentoCliente2", function(){
    
  var documento = $("#nuevoDocumentoCliente2").val();

  var usuario = documento.substr(0,3)+documento.substr(4,7)+documento.substr(12);

  $("#nuevoDocumentoCliente").val(usuario);
  $("#nuevoUsuarioCliente").val(usuario);
  $("#nuevoPasswordCliente").val(usuario);

/*=============================================
REVISAR SI EL USUARIO YA ESTÁ REGISTRADO
=============================================*/

$(".alert").remove();

var cliente = $("#nuevoDocumentoCliente").val();

var datos = new FormData();
datos.append("validarCliente", cliente);

 $.ajax({
    url:"ajax/clientes.ajax.php",
    method:"POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success:function(respuesta){
      
      if(respuesta){

        $("#nuevoDocumentoCliente2").parent().after('<div class="alert alert-warning">Este Cliente ya existe</div>');

        $("#nuevoDocumentoCliente2").val("");

      }

    }

})
})


/*=============================================
EDITAR CLIENTE
=============================================*/
$(document).on("click", ".btnEditarCliente", function(){

var idCliente = $(this).attr("idCliente");

var datos = new FormData();
  datos.append("idCliente", idCliente);

  $.ajax({

    url:"ajax/clientes.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType:"json",
    success:function(respuesta){
          console.log(respuesta["nombre"]);

       $("#idCliente").val(respuesta["id"]);
       $("#editarCliente").val(respuesta["nombre"]);
       $("#editarDocumentoCliente2").val(respuesta["documento"]);
       $("#editarTelefono").val(respuesta["telefono"]);
       $("#editarEmail").val(respuesta["email"]);         
       $("#editarDireccionCliente").val(respuesta["direccion"]);
       $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
  }

  })

  $(document).on("change", "#editarDocumentoCliente2", function(){
  
    var documento = $("#editarDocumentoCliente2").val();

    var usuario = documento.substr(0,3)+documento.substr(4,7)+documento.substr(12);

    $("#editarDocumentoCliente").val(usuario);

    
})

})

/*=============================================
ELIMINAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnEliminarCliente", function(){

var idCliente = $(this).attr("idCliente");

swal({
      title: '¿Está seguro de borrar el cliente?',
      text: "¡Si no lo está puede cancelar la acción!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar cliente!'
    }).then(function(result){
      if (result.value) {
        
          window.location = "index.php?ruta=clientes&idCliente="+idCliente;
      }

})

})
