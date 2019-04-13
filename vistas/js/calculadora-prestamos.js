
/**********************
 * CREAR PRESTAMOS **
 **********************/

 function calcular(){
    $("td").remove();
    
   var monto = parseInt($("#montoPrestamo").val());
   var plazo = $("#plazoPrestamo").val();
   var tasa = $("#tasa").val();

   var porcentaje = (tasa/100)/12;

   var interes = parseInt((monto*porcentaje));
   //var interesMen= interes/plazo;
   //var capital= monto/plazo;
   var cuotas =(monto/plazo)+(interes/plazo);
   var total = cuotas-interes;

//    $("#interesPrestamo").val(interes);
//    $("#cuotasMensuales").val(cuotas);

//    console.log(monto);
//    console.log(interes);
//    console.log(total);

//    $(document).on("change", "#fechaInicioPago", function(){

    var algo =  $("#fechaInicioPago").val();
 
    var fecha = new Date(algo);

    var doceDias = 1000 * 60 * 60 * 24 * 12;

   var suma = fecha.getTime() + doceDias;

   var fecha1 = new Date(suma);

   var mes = 1000 * 60 * 60 * 24 * 30 * plazo;

   var suma2 = fecha1.getTime() + mes;
   var fecha2 = new Date(suma2);

    var fechaFin = (fecha2.getFullYear()+"/"+(fecha2.getMonth()+1)+"/"+fecha2.getDate());

    $("#fechaFinPago").val(fechaFin);


    for(var i=0; i<plazo;i++){

        
        // var suma2 = fecha.getTime() + mes;
        // var fecha2 = new Date(suma2);

        // var interesMen= monto*porcentaje;
        // var capital = cuotas-interesMen;
        // var fechaFin = (fecha2.getFullYear()+"/"+(fecha2.getMonth()+1)+"/"+fecha2.getDate());


        // console.log(monto);
        // console.log(interesMen);
        // console.log(capital);
        // console.log(cuotas);
        // console.log(fecha2.getFullYear()+"/"+(fecha2.getMonth()+1)+"/"+fecha.getDate());

        // monto -= cuotas;
        
        
       
    }
    $(".cuerpo-tabla").append(
        '<tr>'+
            '<td>'+(i)+'</td>'+
            '<td>'+fechaFin+'</td>'+
            // '<td>'+Math.round(monto*100)/100+'</td>'+
            '<td>'+Math.round(interes*100)/100+'</td>'+
            '<td>'+Math.round(total*100)/100+'</td>'+
            '<td>'+Math.round(cuotas*100)/100+'</td>'+
        '</tr>'


    );
    $("#montoPrestamo").val("");
    $("#plazoPrestamo").val("");
    $("#fechaInicioPago").val("");

    // $("#fechaFinPago").val(fechaFin);

//  }) 
   
}
