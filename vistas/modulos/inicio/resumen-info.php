<?php
  $item = null;
  $valor = null;

  $montos = ControladorPrestamos::ctrSumaTotalPrestamos();

  $tasa = ControladorPlantilla::ctrMostrarTasa($item, $valor);

    foreach ($tasa as $key => $value) {
    }
    $valor1 = $value["tasa"];


  $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
  $totalClientes = count($clientes);

  $prestamos = ControladorPrestamos::ctrMostrarPretamos($item, $valor);
  $totalPrestamos = count($prestamos);
?>
    <div class="container-fluid">
      <div class="container">
       <div class="colum">

       <!-- Cabecera -->
       <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- Caja 1 -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo number_format($montos["total"],2); ?></h3>

              <p>Dinero prestado</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="prestamos" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- Caja 2 -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo number_format($valor1); ?><sup style="font-size: 20px">%</sup></h3>

              <p>Tasa de interés</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Modificar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- Caja 3 -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo number_format($totalClientes); ?></h3>

              <p>Clientes Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="clientes" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo number_format($totalPrestamos); ?></h3>

              <p>Préstamos Aprobados</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="prestamos" class="small-box-footer">Más información  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
        <!-- Cabecera -->

        <!-- Grafico de préstamos aprobados -->
    
    <?php


    // error_reporting(0);
    // if(isset($_GET["fechaInicial"])){
  
    //     $fechaInicial = $_GET["fechaInicial"];
    //     $fechaFinal = $_GET["fechaFinal"];

    // }else{

    // $fechaInicial = null;
    // $fechaFinal = null;

    // }

    // $respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

    // $arrayFechas = array();
    // $arrayVentas = array();
    // $sumaPagosMes = array();

    // foreach ($respuesta as $key => $value) {

    // 	#Capturamos sólo el año y el mes
    // 	$fecha = substr($value["fecha"],0,7);

    // 	#Introducir las fechas en arrayFechas
    // 	array_push($arrayFechas, $fecha);

    // 	#Capturamos las ventas
    // 	$arrayVentas = array($fecha => $value["total"]);

    // 	#Sumamos los pagos que ocurrieron el mismo mes
    // 	foreach ($arrayVentas as $key => $value) {
		
    // 		$sumaPagosMes[$key] += $value;
    // 	}

    // }

    // $noRepetirFechas = array_unique($arrayFechas);

  ?>

        <!--=====================================
        GRÁFICO DE VENTAS
        ======================================-->


          <div class="box box-solid bg-teal-gradient">
	
	          <div class="box-header">
		
 		          <i class="fa fa-th"></i>

  		          <h3 class="box-title">Gráfico de Prestamos</h3>

	          </div>

	          <div class="box-body border-radius-none nuevoGraficoVentas">

		          <div class="chart" id="line-chart-ventas" style="height: 250px;"></div>

            </div>

          </div>

          <script>
	
          var line = new Morris.Line({
              element          : 'line-chart-ventas',
              resize           : true,
              data             : [

              <?php

              // if($noRepetirFechas != null){

	            //   foreach($noRepetirFechas as $key){

	            //   	echo "{ y: '".$key."', ventas: ".$sumaPagosMes[$key]." },";


	            //   }

	            //   echo "{y: '".$key."', ventas: ".$sumaPagosMes[$key]." }";

              // }else{

              //    echo "{ y: '0', ventas: '0' }";
              
              // }

              ?>

              ],
              xkey             : 'y',
              ykeys            : ['ventas'],
              labels           : ['ventas'],
              lineColors       : ['#efefef'],
              lineWidth        : 2,
              hideHover        : 'auto',
              gridTextColor    : '#fff',
              gridStrokeWidth  : 0.4,
              pointSize        : 4,
              pointStrokeColors: ['#efefef'],
              gridLineColor    : '#efefef',
              gridTextFamily   : 'Open Sans',
              preUnits         : '$',
              gridTextSize     : 10
            });

          </script>


<!-- Gráfico de préstamos aprobados -->

<!-- Prestamos recientes -->

      <?php
         $item = null;
         $valor = null;
        // $orden = "id";
        
        // $productos = ControladorProductos::ctrMostrarProductos($item, $valor);
        
        ?>
        
        
        <div class="box box-primary">
          
          <div class="box-header with-border">
            
            <h3 class="box-title">Prestamos Recientes</h3>
            
          
            
          </div>
                  
            
          <div class="box-body">
          
            <ul class="products-list product-list-in-box">
                
            <?php
            
            for($i = 0; $i < 1; $i++){
              
              echo '<li class="item">
                
                  <div class="product-info">
                    
                    <a href="" class="product-title">
                      
                      '.$prestamos[$i]["fecha"].'
                      
                      <span class="label label-warning pull-right">$'.$prestamos[$i]["monto"].'</span>
                      
                      </a>
                      
                      </div>
                      
                      </li>';
                      
              }
                    
              ?>
              </ul>

              </div>
              <!-- <div class="box-footer text-center">
                <a href="productos" class="uppercase">Ver todos los productos</a>
              </div> -->
            </div>

        </div>
      </div>
    </div>
     
 

    


