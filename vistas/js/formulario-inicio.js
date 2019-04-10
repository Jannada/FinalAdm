$(document).on("change","#terminos-condiciones", function(){
    
    if( $('#terminos-condiciones').prop('checked') ) {

        $("#boton-enviar").attr("disabled", false);
    }else{
        $("#boton-enviar").attr("disabled", true);
    }
})

var enlace = "https://formspree.io/viviana@viviana.rdelgado.net";
$('#formulario-inicio').attr('action', enlace);


