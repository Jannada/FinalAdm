//Ingresar Usuario


$(document).on("change", "#nuevoPerfil", function(){
 
    var datos = new FormData();
    var idEmpleado = $("#nuevoPerfil").val();
   console.log(idEmpleado);
    datos.append("idEmpleado", idEmpleado);

    $.ajax({

        url:"ajax/usuarios.ajax.php",
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
                      url:"ajax/usuarios.ajax.php",
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
