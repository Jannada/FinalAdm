<?php
  $item = null;
  $valor = null;

  $montos = ControladorPrestamos::ctrSumaTotalPrestamos();

  $tasa = ControladorPlantilla::ctrMostrarTasa($item, $valor);

    foreach ($tasa as $key => $value) {
    }
    $valor1 = $value["tasa"];
    $valor2 = $value["id"];



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
            <a href="#" id="tasa1" data-toggle="modal" data-target="#modalEditarTasa" class="small-box-footer">Modificar  <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="clientes"  class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
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

        <div id="modalEditarTasa" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">

              <form role="form" method="post">
                <div class="modal-header" style="background: #3c8dbc; color:#fff ">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modificar Tasa</h4>
                </div>

                <div class="modal-body">
                  <div class="box-body">
                      <!-- ENTRADA PARA EDITAR LA TASA -->
                      <div class="form-group">
                       <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-key"></i></span>
                         <input type="text" class="form-control input-lg" name="editarTasa" id="editarTasa" required placeholder="Editar tasa" value="<?php echo number_format($valor1); ?>">
                         <input type="hidden" class="form-control input-lg" name="editarTasa1" id="editarTasa1" value="<?php echo number_format($valor2); ?>">
                         
                        </div>
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Guardar cambios</button>

                </div>
                <?php
                  $editarTasa = new ControladorPlantilla();
                  $editarTasa -> ctrEditarTasa();
                    ?>
              </form>
            </div>
          </div>
        </div>
 

    


