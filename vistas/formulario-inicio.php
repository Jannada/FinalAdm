
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Financiera</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- <link rel="icon" href="vistas/img/plantilla/icono-negro.png"> -->

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">

  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">

   <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">

  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>

  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- SweetAlert 2 -->
  <script src="plugins/sweetalert2/sweetalert2.all.js"></script>
   <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="plugins/input-mask/jquery.inputmask.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- jQuery Number -->
  <script src="plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="bower_components/moment/min/moment.min.js"></script>
  <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="bower_components/raphael/raphael.min.js"></script>
  <script src="bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS http://www.chartjs.org/-->
  <script src="bower_components/Chart.js/Chart.js"></script>



</head>
<body>
 <header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header ">
        <a class="navbar-brand" href="#">FinaCorp</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="../index.php">Home</a></li>
        <li><a href="#">Nosotros</a></li>
        <li class="active"><a href="#">Enviar Solicitud</a></li>
        <li><a href="../vistas/plantilla.php">Login</a></li>
        <li><a href="#creadores">Conócenos</a></li>
      </ul>
    </div>
  </nav>
 </header>


 <!-- <div class="content-wrapper"> -->
  <!-- <section class="content">
    <div class="row"> -->
      <div class="col-md-2"></div>
      <div class="col-md-8">
      <div class="box box-success">
       <!-- Formulario -->
       <form role="form" method="post" action="https://formspree.io/viviana@viviana.rdelgado.net"  class="formulario-inicio" id="formulario-inicio">

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
                <option value="No">No</option>
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
    <!-- </div>
   </section> -->
 <!-- </div> -->

 <script src="js/formulario-inicio.js"></script>
</body>
