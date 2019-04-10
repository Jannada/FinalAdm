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

        <div class="contenido">
            
          <h3 style="text-align:center">Información del cliente</h3>
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
              <input type="text" class="form-control" id="nuevoEmail" name="nuevoEmail" required placeholder="Email">  
            </div>
          </div>
          <!-- Entrada para el telefono -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="email" class="form-control" id="nuevoTelefono" name="nuevoTelefono" required  placeholder="Telefono">
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
              <input type="email" class="form-control" id="nuevoUsuarioCliente" name="nuevoUsuarioCliente" required  placeholder="Usuario">
            </div>
          </div>
          
          <!-- Entrada para la clave -->
          <div class="form-group">
            <div class="form-group col-md-6">
                <input type="password" class="form-control" id="nuevoPasswordCliente" name="nuevoPasswordCliente" required  placeholder="Clave">
              </div>
          </div>

          <div class="cuenta col-md-12 ">
                <div class="form-group ">
                  <div class="form-check pull-left">
                  <label >Sexo:</label>
                  <label class="radio-inline"><input type="radio" name="optradio" checked>Masculino</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Femenino</label>
                  </div>
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

          <!-- Información del garánte -->
        <div class="contenido-garante" style="display:none;">
           
           <br/>
           
              <h3 style="text-align:center">Información del garánte</h3>
          
          <!-- Nombre del garante -->
          <div class="form-group">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="nuevoGarante" name="nuevoGarante" required placeholder="Nombres">
            </div>
            <!-- Entrada para el documento del garante -->
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="nuevoDocumentoGarante2" name="nuevoDocumentoGarante2" required  placeholder="Documento">
            <input type="hidden" class="form-control" id="nuevoDocumentoGarante" name="nuevoDocumentoGarante" >
          </div>
          </div>
          

           <!-- Entrada para la direccion del garante -->
           <div class="form-group col-md-12">
            <input type="text" class="form-control" id="nuevaDireccionGarante" name="nuevaDireccionGarante" required  placeholder="Direccion">
          </div>

          <!-- Entrada para el email del garante -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="nuevoEmail" name="nuevoEmailGarante" required placeholder="Email">  
            </div>
          </div>
          <!-- Entrada para el telefono del garante -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="email" class="form-control" id="nuevoTelefonoGarante" name="nuevoTelefonoGarante" required  placeholder="Telefono">
              </div>
          </div>
          <!-- Entrada para la Fecha de nacimiento del garante -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="nuevaFechaNacimientoGarante" name="nuevaFechaNacimientoGarante" required  placeholder="Fecha de nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
            </div>
          </div>

          <!-- Información del garante -->

        </div>
         

          <!-- Información del préstamo -->
        <div class="prestamo">
          <br/>
            <h3 style="text-align:center">Información del préstamo</h3>

           <!-- Entrada para el monto -->
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="montoPrestamo" name="montoPrestamo" required  placeholder="Monto">
          </div>
          <!-- Entrada para el plazo -->
          <div class="form-group col-md-4">
            <input type="text" class="form-control" id="plazoPrestamo" name="plazoPrestamo" required  placeholder="Plazo (meses)">
          </div>

           <!-- Entrada para el interés -->
           <div class="form-group col-md-4">
            <input type="text" class="form-control" id="interesPrestamo" name="interesPrestamo" required  placeholder="Interés" readonly>
          </div>

          <!-- Entrada para cuotas mensuales -->
          <div class="form-group col-md-4">
            <input type="text" class="form-control" id="cuotasMensuales" name="cuotasMensuales" required  placeholder="Cuotas" readonly>
          </div>

          <!-- Entrada para la Fecha de inicio préstamo -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="fechaInicio" name="fechaInicio" required  placeholder="Fecha de inicio" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
            </div>
          </div>

          <!-- Entrada para la Fecha de fin préstamo -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="fechaFin" name="fechaFin" required readonly  placeholder="Fecha de fin" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
            </div>
          </div>


         <!-- Información del préstamo -->
        </div>
        </div>
        
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Crear préstamo</button>
        </div>

       </form>
       <!-- Formulario -->
      </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </section>
</div>
