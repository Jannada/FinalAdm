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

       <!-- Cabecera -->
       <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- Caja 1 -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>$<?php echo number_format($montos["total"],2); ?></h3>

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
 

    


