$(document).on("change", "#gridCheck", function(){
    
    if( $('#gridCheck').prop('checked') ) {
        $(".contenido-garante").show();
    }else{
        $(".contenido-garante").hide();
    }
})

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

    for(var i=0; i<plazo;i++){

        var interesMen= monto*porcentaje;
        var capital = cuotas-interesMen;

        console.log(interesMen);
        console.log(capital);
        console.log(cuotas);

        monto -= cuotas;
    }
   
})

