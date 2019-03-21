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