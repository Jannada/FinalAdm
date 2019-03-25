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
 