//Ingresar Usuario

$(document).on("change", "#nuevoUsuario", function(){

    var usuario = $(this).val();

    if (usuario=="vivi" || usuario=="Vivi" || usuario=="Viviana" || usuario=="viviana" || usuario=="vbelt" || usuario=="Vbelt" || usuario=="viv" || usuario=="Viv") {

        swal({
            title: '<h1 style="color:#FFF">'+usuario+'!</h1>',
            html: '<h3 style="color:#FFF">Me encanta verte sonrreir, no dejes de hacerlo :33<h3>',
            imageUrl: 'vistas/img/cat.gif',
            imageWidth: 400,
            imageHeight: 200,
            background: '#0E4572',
            imageAlt: 'Custom image',
            animation: false
          })
        
    }

})

$(document).on("change", "#nuevoPerfil", function(){
 
    var datos = new FormData();
    var idEmpleado = $("#nuevoPerfil").val();
   console.log(idEmpleado);
    datos.append("idEmpleado", idEmpleado);

    $.ajax({

        url:"../ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            
           // $("#nuevoPerfilUsuario").val(respuesta["id_perfil"]);

            var datosPerfil = new FormData();
            datosPerfil.append("idPerfil",respuesta["id_perfil"]);
        
            $.ajax({
                      url:"../ajax/usuarios.ajax.php",
                      method: "POST",
                      data: datosPerfil,
                      cache: false,
                      contentType: false,
                      processData: false,
                      dataType:"json",
                      success:function(respuestaPerfil){ 
                       $("#nuevoPerfilUsuario").val(respuestaPerfil["perfil"]);
                       $("#nuevoPerfilUsuario2").val(respuestaPerfil["id"]);
                        }
                   
            }) 
                     
        }
    });
})

   // <!-- Editar usuario -->
   $(document).on("click", ".btnEditarUsuario", function(){
    var idUsuario = $(this).attr("idUsuario");
    var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({

        url:"../ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            
            $("#editarUsuario").val(respuesta["usuario"]);
            $("#passwordActual").val(respuesta["password"]);

           
        }
    });
})
 
 // Eliminar usuario

 $(document).on("click", ".btnEliminarUsuario", function(){
    var idUsuario = $(this).attr("idUsuario");
    var fotoUsuario = $(this).attr("fotoUsuario");
    var usuario = $(this).attr("usuario");
    console.log("fotoUsuario", fotoUsuario);
    

    swal({
        title: "Esta seguro de borrar el usuario?",
        text: "¡Si no lo está puede cancelar la acción",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, borrar usuario!'
        

    }).then(function(result){

        if(result.value){
            window.location = "plantilla.php?ruta=usuarios&idUsuario="+idUsuario;
        }
    })
})