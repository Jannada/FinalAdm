$(document).on("change","#terminos-condiciones", function(){
    
    if( $('#terminos-condiciones').prop('checked') ) {

        $("#boton-enviar").attr("disabled", false);
    }else{
        $("#boton-enviar").attr("disabled", true);
    }
})