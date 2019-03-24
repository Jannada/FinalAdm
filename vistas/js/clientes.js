 /*=============================================
	CREAR USUARIO AUTOMATICO
=============================================*/

$(document).on("change", "#nuevoDocumentoCliente", function(){
    
    var documento = $("#nuevoDocumentoCliente").val();

    var usuario = documento.substr(0,3)+documento.substr(4,7)+documento.substr(12);

    $("#nuevoDocumentoCliente").val(usuario);
    $("#nuevoUsuarioCliente").val(usuario);
    $("#nuevoPasswordCliente").val(usuario);

    
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
           $("#editarDocumentoCliente").val($("#editarDocumentoCliente2").val().substr(0,3)+$("#editarDocumentoCliente2").val().substr(4,7)+$("#editarDocumentoCliente2").val().substr(12));
           $("#editarEmail").val(respuesta["email"]);
	       $("#editarTelefono").val(respuesta["telefono"]);
	       $("#editarDireccionCliente").val(respuesta["direccion"]);
           $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
	  }

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