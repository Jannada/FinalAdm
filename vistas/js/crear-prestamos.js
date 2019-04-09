$(document).on("change", "#gridCheck", function(){
    
    if( $('#gridCheck').prop('checked') ) {
        $(".contenido-garante").show();
    }else{
        $(".contenido-garante").hide();
    }
})