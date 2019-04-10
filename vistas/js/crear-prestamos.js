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

   $(document).on("change", "#fechaInicio", function(){

    var algo =  $("#fechaInicio").val();
 
    var fecha = new Date(algo);

    for(var i=0; i<plazo;i++){

        var mes = 1000 * 60 * 60 * 24 * 30 * i;
        var suma = fecha.getTime() + mes;
        var fecha1 = new Date(suma);

        

        var interesMen= monto*porcentaje;
        var capital = cuotas-interesMen;

        console.log(monto);
        console.log(interesMen);
        console.log(capital);
        console.log(cuotas);
        console.log(fecha1.getFullYear()+"/"+(fecha1.getMonth()+1)+"/"+fecha1.getDate());

        monto -= cuotas;
    }
 })

    
   
})



// $(document).on("change", "#fechaInicio", function(){

//    var algo =  $("#fechaInicio").val();

//    var fecha = new Date(algo);

//    console.log(fecha.getFullYear(), fecha.getMonth()+1);
// })

function mifecha(year, mes, dia){

    if(mes){}
}

