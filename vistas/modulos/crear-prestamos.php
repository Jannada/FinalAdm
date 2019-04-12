<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Crear préstamo

    </h1>

    <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Crear préstamo</li>

    </ol>

  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      <div class="box box-success">
       <!-- Formulario -->
       <form role="form" method="post" class="formularioVenta">
        <div class="box-body">
          <!-- Información del cliente -->

              <!-- Entrada para el empleado -->
            <br/>
            <div class="form-group col-md-4">
              <label class="" id="empleadoNombre" name="empleadoNombre"><?php echo $_SESSION["nombre"]; ?></label>

              <input type="hidden" name="empleadoId" value="<?php echo $_SESSION["empleado"]; ?>">
              <?php

               $item = null;
               $valor = null;
               $tasa = ControladorPlantilla::ctrMostrarTasa($item, $valor);

               foreach ($tasa as $key => $value) {
                                 
              }

              $valor = $value["tasa"];

              echo '<input type="hidden" class="form-control" id="tasaInteres" name="tasaInteres" value="'.$valor.'">';
            
              ?>

              
              
            
            </div>

            <div class="form-group" style="display:none;">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <?php

                    $item = null;
                    $valor = null;

                    $prestamo = ControladorPrestamos::ctrMostrarPretamos($item, $valor);

                    if(!$prestamo){

                      echo '<input type="hidden" class="form-control" id="prestamoId" name="prestamoId" value="1">';
                  
                    }else{

                      foreach ($prestamo as $key => $value) {
                        
                      }

                      $codigo = $value["id"] + 1;

                      echo '<input type="hidden" class="form-control" id="prestamoId" name="prestamoId" value="'.$codigo.'" >';
                  
                    }

                    ?>
                    
                    
                  </div>
                
                </div>
           
            <br/>
        <div class="contenido">
            <div class="col-md-4"></div>
             <!-- Entrada para el id empleado -->


          <h3 >Información del cliente</h3>

          <!-- Entrada para el nombre -->
          <div class="form-group">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="nuevoCliente" name="nuevoCliente" required placeholder="Nombres">
            </div>

             <!-- Entrada para el documento -->
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="nuevoDocumentoCliente2" name="nuevoDocumentoCliente2" required  placeholder="Documento">
            <input type="hidden" class="form-control" id="nuevoDocumentoCliente" name="nuevoDocumentoCliente" >
          </div>
          </div>

          <!-- Entrada para la direccion -->
          <div class="form-group col-md-12">
            <input type="text" class="form-control" id="nuevaDireccionCliente" name="nuevaDireccionCliente" required  placeholder="Direccion">
          </div>

          <!-- Entrada para el email -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="email" class="form-control" id="nuevoEmail" name="nuevoEmail" required placeholder="Email">
            </div>
          </div>
          <!-- Entrada para el telefono -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="nuevoTelefono" name="nuevoTelefono" required  placeholder="Telefono">
              </div>
          </div>
          <!-- Entrada para la Fecha de nacimiento -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="nuevaFechaNacimiento" name="nuevaFechaNacimiento" required  placeholder="Fecha de nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
            </div>
          </div>

          <!-- Entrada para  el usuario -->
          <div class="form-group">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="nuevoUsuarioCliente" name="nuevoUsuarioCliente" required  placeholder="Usuario" readonly>
            </div>
          </div>

          <!-- Entrada para la clave -->
          <div class="form-group">
            <div class="form-group col-md-6">
                <input type="password" class="form-control" id="nuevoPasswordCliente" name="nuevoPasswordCliente" required  placeholder="Clave" readonly>
              </div>
          </div>

          <!-- Entrada para el genero -->
          <div class="cuenta col-md-12 ">
            <div class="form-group col-md-3">
              <label for="genero">Sexo:</label>
              <select class="form-control" id="genero" name="genero">
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
              </select>
            </div>
              <br/>
          </div>
          

          <div class="garante col-md-12 ">
              <div class="form-group ">
                <div class="form-check pull-right">
                  <input class="form-check-input " type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Garante
                  </label>
                </div>
            </div>
            </div>
          <!-- Información del cliente -->
        </div>

          <!-- Información del garánte-->
        <div class="contenido-garante" style="display:none;">

           <br/>

              <h3 style="text-align:center">Información del garánte</h3>

          <!-- Nombre del garante -->
          <div class="form-group">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="nuevoGarante" name="nuevoGarante" placeholder="Nombres">
            </div>
            <!-- Entrada para el documento del garante -->
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="nuevoDocumentoGarante2" name="nuevoDocumentoGarante2" placeholder="Documento">
            <input type="hidden" class="form-control" id="nuevoDocumentoGarante" name="nuevoDocumentoGarante" >
          </div>
          </div>


           <!-- Entrada para la direccion del garante -->
           <div class="form-group col-md-12">
            <input type="text" class="form-control" id="nuevaDireccionGarante" name="nuevaDireccionGarante" placeholder="Direccion">
          </div>

          <!-- Entrada para el email del garante -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="email" class="form-control" id="nuevoEmailGarante" name="nuevoEmailGarante" placeholder="Email">
            </div>
          </div>
          <!-- Entrada para el telefono del garante -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="nuevoTelefonoGarante" name="nuevoTelefonoGarante" placeholder="Telefono">
              </div>
          </div>
          <!-- Entrada para la Fecha de nacimiento del garante -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="nuevaFechaNacimientoGarante" name="nuevaFechaNacimientoGarante" placeholder="Fecha de nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
            </div>
          </div>

          <!-- Información del garante -->

        </div> 


          <!-- Información del préstamo -->
        <div class="prestamo">
          <br/>
            <h3 style="text-align:center">Información del préstamo</h3>

           <!-- Entrada para el monto -->
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="montoPrestamo" name="montoPrestamo" required  placeholder="Monto">
          </div>
          <!-- Entrada para el plazo -->
          <div class="form-group col-md-3">
            <input type="text" class="form-control" id="plazoPrestamo" name="plazoPrestamo" required  placeholder="Plazo (meses)">
          </div>

           <!-- Entrada para el interés -->
           <div class="form-group col-md-3">
            <input type="text" class="form-control" id="interesPrestamo" name="interesPrestamo" required  placeholder="Interés" readonly>
          </div>

          <!-- Entrada para cuotas mensuales -->
          <div class="form-group col-md-3">
            <input type="text" class="form-control" id="cuotasMensuales" name="cuotasMensuales" required  placeholder="Cuotas" readonly>
          </div>
          

          <h3 style="text-align:center">Información de cuotas</h3>

          <!-- Entrada para la Fecha de inicio prestamo -->
          <div class="form-group col-md-12">
            <!-- Entrada para la Fecha de inicio pago -->
            <div class=" col-md-2"></div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="fechaInicioPago" name="fechaInicioPago" required placeholder="Fecha del primer pago" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
            </div>
          <!-- Entrada para la Fecha de fin pago -->
          <div class="fecha" id="fechaFinP">

          </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="fechaFinPago" name="fechaFinPago" required readonly  placeholder="Fecha del último pago">
            </div>
            <div class=" col-md-2"></div>
          </div>

         


         <!-- Información del préstamo -->
        </div>
        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar usuario</button>
        </div>
        <?php
                $crearPrestamo = new ControladorPrestamos();
                $crearPrestamo -> ctrCrearPrestamo();
              ?>
       </form>
       <!-- Formulario -->
      </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </section>
</div>
