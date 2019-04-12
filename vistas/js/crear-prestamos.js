$(document).on("change", "#gridCheck", function(){
    
    if( $('#gridCheck').prop('checked') ) {
        $(".contenido-garante").show();

        $("#nuevoGarante").attr("required","true");
        $("#nuevoDocumentoGarante2").attr("required","true");
        $("#nuevaDireccionGarante").attr("required","true");
        $("#nuevoEmailGarante").attr("required","true");
        $("#nuevoTelefonoGarante").attr("required","true");
        $("#nuevaFechaNacimientoGarante").attr("required","true");
        
    }else{
        $(".contenido-garante").hide();
    }
})

if(localStorage.getItem("capturarRango")!= null){
    $("#daterange-btn span").html(localStorage.getItem("capturarRango"));
  }else{
    $("#daterange-btn span").html('<i class="fa fa-calendar"></i> Rango de fecha');
  }

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

    // var fechaFin = (fecha1.getFullYear()+"/"+(fecha1.getMonth()+1)+"/"+fecha1.getDate());

    // $("#fechaFinPago").val(fechaFin);

    for(var i=0; i<plazo;i++){

        var mes = 1000 * 60 * 60 * 24 * 30 * i;
        var suma2 = fecha.getTime() + mes;
        var fecha2 = new Date(suma2);

        

        var interesMen= monto*porcentaje;
        var capital = cuotas-interesMen;

        console.log(monto);
        console.log(interesMen);
        console.log(capital);
        console.log(cuotas);
        console.log(fecha2.getFullYear()+"/"+(fecha2.getMonth()+1)+"/"+fecha.getDate());

        monto -= cuotas;
    }
    var fechaFin = (fecha2.getFullYear()+"/"+(fecha2.getMonth()+1)+"/"+fecha2.getDate());

    $("#fechaFinPago").val(fechaFin);

 })

    
   
})

//fechas
/*=============================================
RANGO DE FECHAS
=============================================*/

$('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Hoy'       : [moment(), moment()],
        'Ayer'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Últimos 7 días' : [moment().subtract(6, 'days'), moment()],
        'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
        'Este mes'  : [moment().startOf('month'), moment().endOf('month')],
        'Último mes'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment(),
      endDate  : moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  
      var fechaInicial = start.format('YYYY-MM-DD');
  
      var fechaFinal = end.format('YYYY-MM-DD');
  
      var capturarRango = $("#daterange-btn span").html();
     
       localStorage.setItem("capturarRango", capturarRango);
  
         window.location = "plantilla.php?ruta=crear-prestamos&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;
  
    }
  
  )
  
  /*=============================================
  CANCELAR RANGO DE FECHAS
  =============================================*/
  
  $(".daterangepicker.opensleft .range_inputs .cancelBtn").on("click", function(){
  
      localStorage.removeItem("capturarRango");
      localStorage.clear();
      window.location = "crear-prestamos";
  })
  
  /*=============================================
  CAPTURAR HOY
  =============================================*/
  
  $(".daterangepicker.opensleft .ranges li").on("click", function(){
  
      var textoHoy = $(this).attr("data-range-key");
  
      if(textoHoy == "Hoy"){
  
          var d = new Date();
          
          var dia = d.getDate();
          var mes = d.getMonth()+1;
          var año = d.getFullYear();
  
          if(mes < 10){
  
              var fechaInicial = año+"-0"+mes+"-"+dia;
              var fechaFinal = año+"-0"+mes+"-"+dia;
  
          }else if(dia < 10){
  
              var fechaInicial = año+"-"+mes+"-0"+dia;
              var fechaFinal = año+"-"+mes+"-0"+dia;
  
          }else if(mes < 10 && dia < 10){
  
              var fechaInicial = año+"-0"+mes+"-0"+dia;
              var fechaFinal = año+"-0"+mes+"-0"+dia;
  
          }else{
  
              var fechaInicial = año+"-"+mes+"-"+dia;
              var fechaFinal = año+"-"+mes+"-"+dia;
  
          }	
  
          localStorage.setItem("capturarRango", "Hoy");
  
          window.location = "plantilla.php?ruta=crear-prestamos&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;
  
      }
  
  })

