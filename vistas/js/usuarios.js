//Ingresar Usuario


$(document).on("change", "#nuevoPerfil", function(){

    
   var idEmpleado = $(this).attr("idEmpleado");
   console.log(idEmpleado);

//    $.ajax({
//     url: "ajax/usuarios.ajax.php", 
//     success: function(respuesta){
//         console.log("respuesta", respuesta);
//     }
// })

    var datos = new FormData();

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
            console.log(respuesta);
            
           
            // $("#nuevoDocumento").val(respuesta["documento"]);
            // $("#editarUsuario").val(respuesta["usuario"]);
            // $("#editarPerfil").html(respuesta["perfil"]);
            // $("#editarPerfil").val(respuesta["perfil"]);
            // $("#fotoActual").val(respuesta["foto"]);

            // $("#passwordActual").val(respuesta["password"]);

            // if(respuesta["foto"]!= ""){
            //     $(".previsualizarEditar").attr("src", respuesta["foto"]);
            // }else{
            //     $(".previsualizarEditar").attr("src", "vistas/img/usuarios/default/anonymous.png");
            // }
        }
    });
})
