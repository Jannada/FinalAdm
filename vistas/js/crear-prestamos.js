$(document).on("change", "#gridCheck", function(){
    
    if( $('#gridCheck').prop('checked') ) {
        $(".contenido-garante").show();
    }else{
        $(".contenido-garante").hide();
    }
})

/**********************
 * CREAR PRESTAMOS **
 **********************/

$(document).on("change", "#plazoPrestamo", function(){
    
   var monto = parseInt($("#montoPrestamo").val());
   var plazo = $("#plazoPrestamo").val();

   var porcentaje = (8/100)/12;

   var interes = parseInt((monto*porcentaje)*plazo);
   //var interesMen= interes/plazo;
   //var capital= monto/plazo;
   var cuotas =(monto/plazo)+(interes/plazo);
   var total = monto+interes;

   $("#interesPrestamo").val(interes);
   $("#cuotasMensuales").val(cuotas);

   console.log(monto);
   console.log(interes);
   console.log(total);

   $(document).on("change", "#fechaInicioPago", function(){

    var algo =  $("#fechaInicioPago").val();
 
    var fecha = new Date(algo);

    var doceDias = 1000 * 60 * 60 * 24 * 12;

   var suma = fecha.getTime() + doceDias;

   var fecha1 = new Date(suma);

    var fechaFin = (fecha1.getFullYear()+"/"+(fecha1.getMonth()+1)+"/"+fecha1.getDate());

    $("#fechaFinPago").val(fechaFin);

    // for(var i=0; i<plazo;i++){

    //     var mes = 1000 * 60 * 60 * 24 * 30 * i;
    //     var suma2 = fecha.getTime() + mes;
    //     var fecha2 = new Date(suma2);

        

    //     var interesMen= monto*porcentaje;
    //     var capital = cuotas-interesMen;

    //     console.log(monto);
    //     console.log(interesMen);
    //     console.log(capital);
    //     console.log(cuotas);
    //     console.log(fecha2.getFullYear()+"/"+(fecha2.getMonth()+1)+"/"+fecha.getDate());

    //     monto -= cuotas;
    // }
 })

    
   
})

