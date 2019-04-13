

 <div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      <div class="box box-success">
       <!-- Formulario -->
       <form role="form" method="post" class="formulario-inicio" id="formulario-inicio">

        <div class="box-body">

          <!-- Información del cliente -->
        <div class="contenido">

          <h3 style="text-align:center">Datos personales</h3>
          <!-- Entrada para el nombre -->
          <div class="form-group">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombres">
            </div>

             <!-- Entrada para el documento -->
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="documento" name="documento" required  placeholder="Documento">
            <!-- <input type="hidden" class="form-control" id="nuevoDocumentoCliente" name="nuevoDocumentoCliente" > -->
          </div>
          </div>

          <!-- Entrada para la direccion -->
          <div class="form-group col-md-12">
            <input type="text" class="form-control" id="direccion" name="direccion" required  placeholder="Direccion">
          </div>

          <!-- Entrada para el email -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="email" name="email" required placeholder="Email">
            </div>
          </div>
          <!-- Entrada para el telefono -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="telefono" name="telefono" required  placeholder="Telefono">
              </div>
          </div>
          <!-- Entrada para la Fecha de nacimiento -->
          <div class="form-group">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="fecha-Nacimiento" name="fecha-Nacimiento" required  placeholder="Fecha de nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
            </div>
          </div>

          <!-- Residencia propia o rentada -->
          <div class="cuenta col-md-12">
          <div class="form-group col-md-2"></div>
            <div class="form-group col-md-4">
            <label for="genero">Residencia:</label>
            <select class="form-control" name="residencia" id="residencia">
                <option value="Rentada">Rentada</option>
                <option value="Propia">Propia</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="genero">Sexo:</label>
              <select class="form-control" name="sexo" id="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
            </div>
          </div>

      


        </div>
          <!-- Información del cliente -->

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

          <!-- Entrada para la garantía del préstamo  -->
          <div class="form-group col-md-4">
            <input type="text" class="form-control" id="garantiaPrestamo" name="garantiaPrestamo" required  placeholder="Garantía">
          </div>

          <!-- Cuenta con nosotros -->
          <div class="cuenta col-md-12 ">
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Cuenta-Anterior">Cuenta en FinaCorp</label>
              <select class="form-control" name="cuenta-finacorp" id="cuenta-finacorp">
                <option value="Sí">Sí</option>
              </select>
            </div>
          </div>

        </div>
         <!-- Información del préstamo -->

         <!-- Información del empleo -->
          <div class="empleo">
            <br/>
            <h3 style="text-align:center">Información laboral</h3>

             <!-- Negocio propio o empleado -->
            <div class="cuenta col-md-12 ">
            <div class="col-md-8"></div>
              <div class="form-group col-md-4">
                <label for="Cuenta-Anterior">Fuente de ingresos</label>
                <select class="form-control" name="fuente-ingreso" id="fuente-ingreso">
                <option value="Negocio Propio">Negocio Propio</option>
                <option value="Empleado">Empleado</option>
              </select>
              </div>
            </div>

            <!-- Entrada para el nombre de la empresa  -->
          <div class="form-group col-md-12">
            <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" required  placeholder="Nombre de la empresa">
          </div>

           <!-- Entrada para el telefono de la empresa  -->
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="telefonoEmpresa" name="telefonoEmpresa" required  placeholder="Teléfono de la empresa">
          </div>

            <!-- Entrada para el sueldo de la empresa  -->
          <div class="form-group col-md-6">
            <input type="text" class="form-control" id="sueldoMensual" name="sueldoMensual" required  placeholder="Sueldo mensual">
          </div>

          </div>
         <!-- Información del empleo -->

        </div>

        <div class="modal-footer">
          <div class="col-md-4"></div>
           <!-- Terminos y condiciones -->
           <div class="terminos-condiciones col-md-4 ">
              <div class="form-group ">
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" id="terminos-condiciones">
                  <label class="form-check-label" for="gridCheck">
                    Aceptar <a href="pdf/Glosario-terminos-Financieros.pdf" target="_blank" >términos y condiciones</a>
                  </label>
                </div>
              </div>
            </div>
          <div class="col-md-4"></div>

          <div class="col-md-12">
          <button type="submit" id="boton-enviar" class=" btn btn-primary" disabled=true>Enviar Solicitud</button>
          </div>

        </div>
       </form>
       <!-- Formulario -->
      </div>
      </div>
      <div class="col-md-2"></div>
    </div>
   </section>
 </div>

 

