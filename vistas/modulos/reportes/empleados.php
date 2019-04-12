 <?php

 $item = null;
 $valor = null;

 $prestamos = ControladorPrestamos::ctrMostrarPretamos($item, $valor);
 $empleados = ControladorEmpleados::ctrMostrarEmpleados($item, $valor);

 $arrayEmpleados = array();
 $arraylistaPrestamos = array();

foreach ($prestamos as $key => $valuePrestamos) {

  foreach ($empleados as $key => $valueEmpleados) {

    if($valueEmpleados["id"] == $valuePrestamos["id_usuario"]){

        #Capturamos los vendedores en un array
        array_push($arrayEmpleados, $valueEmpleados["nombre"]);

        #Capturamos las nombres y los valores netos en un mismo array
        $arraylistaPrestamos = array($valueEmpleados["nombre"] => $valuePrestamos["monto"]);

         #Sumamos los netos de cada vendedor

        foreach ($arraylistaPrestamos as $key => $value) {

            $sumaTotalVendedores[$key] += $value;

         }

    }
  
  }

}

#Evitamos repetir nombre
$noRepetirNombres = array_unique($arrayEmpleados);

?>


<!--=====================================
Empleados
======================================-->

<div class="box box-success">
	
	<div class="box-header with-border">
    
    	<h3 class="box-title">Empleados</h3>
  
  	</div>

  	<div class="box-body">
  		
		<div class="chart-responsive">
			
			<div class="chart" id="bar-chart1" style="height: 300px;"></div>

		</div>

  	</div>

</div>

<script>
	
//BAR CHART
var bar = new Morris.Bar({
  element: 'bar-chart1',
  resize: true,
  data: [

  <?php
    
    foreach($noRepetirNombres as $value){

      echo "{y: '".$value."', a: '".$sumaTotalVendedores[$value]."'},";

    }

  ?>
  ],
  barColors: ['#0477A5'],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Prestamos'],
  preUnits: '$',
  hideHover: 'auto'
});


</script>