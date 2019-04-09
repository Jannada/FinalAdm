
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Formulario</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- <link rel="icon" href="vistas/img/plantilla/icono-negro.png"> -->

  <link rel="stylesheet" href="vistas/css/styles.css">

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="vistas/plugins/iCheck/all.css">

   <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">

  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
   <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="vistas/plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="vistas/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- jQuery Number -->
  <script src="vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="vistas/bower_components/raphael/raphael.min.js"></script>
  <script src="vistas/bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS http://www.chartjs.org/-->
  <script src="vistas/bower_components/Chart.js/Chart.js"></script>
</head>

<body>
  <!-- Navbar -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header ">
        <a class="navbar-brand" href="#">FinaCorp</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Enviar Solicitud</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#creadores">Conócenos</a></li>
      </ul>
    </div>
  </nav>
</header>

<main>
  <!-- Anuncios -->
  <div class="row anuncios" >
    <div class="">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <!-- indicadores -->
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
            </ol>
                            <!-- contenedor-slides -->
            <div class="carousel-inner">
                <div class="item active">
                  <img src="vistas/img/0_xs5p7pxMnWZuZBUw_.png" alt="primer-slide" >
                </div>
                <div class="item">
                  <img src="vistas/img/itla_logo.png" alt="primer-slide">
                </div>
                <div class="item">
                  <img src="vistas/img/design.png" alt="primer-slide">
                </div>
            </div>
            <a class="carousel-control-prev black" href="#slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next black" href="#slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
  </div>

  <!-- acercade -->
    <div class="acercade col-md-8 ">

      <div class="informacion col-md-8">
        <h2>¿Quienes Somos?</h2>
        <p>Somos una empresa dedicada a brindar el mejor servicio de financiamientos de la República
          Dominicana. 
          ¡Si lo puedes imaginar, lo puedes comprar!
          </p>

            <p>Únete a nosotros, solo tienes que enviar tu Solicitud, el personal evaluará tu información y seguido
              tendrás un perfil mediante el cual te mantendremos al tanto de tu préstamo. Sencillo y a la mano siempre.
            </p>
  
            <p>Has click <a href="">AQUÍ</a> para obtener más información acerca del registro.</p>   
      </div>
    
    </div>


<!-- Formulario -->
  <section class="formulario">
      <div class="col-md-4" >
        <div class="panel panel-default text-center">
          <div class="panel-body">
          <form role="form" method="post" class="formularioSolicitud">
                <!--=====================================
                CABEZA DEL MODAL
                ======================================-->

                <div class="modal-header" style="background:rgb(59, 134, 94); color:white">
                  <h4 class="modal-title">¡Solicita tu financiamiento ya!</h4>
                </div>

                <div class="box-body">
                  <div class="box">
                <!--=====================================
                ENTRADA DEL Nombre
                ======================================-->
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 
                        <input type="text" class="form-control" id="nombre" name="ingNombre" placeholder="Nombre" required>
                      </div>
                    </div> 

                <!--=====================================
                ENTRADA DEL Apellido
                ======================================--> 
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                        </div>
                    </div>
                  <!--=====================================
                ENTRADA DEL Cedula
                ======================================--> 
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula" required>
                      </div>
                    </div>
                  <!--=====================================
                ENTRADA DEL email
                ======================================--> 

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                      </div>
                    </div>
                  <!--=====================================
                ENTRADA DE LA Ocupación
                ======================================--> 
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                        <select class="form-control" name="ocupacion" id="ocupacion">
                        <option value="">Seleccionar ocupación</option>
                        <option value="Empleado">Empleado</option>
                        <option value="Profesor">Profesor</option>
                        <option value="Estudiante">Estudiante</option>
                      </select>
                      </div>
                    </div>

                    <div class="cajaOcupacion"></div>
                    <input type="hidden" name="inputOcupacion" id="inputOcupacion">
                        
                </div>
              </div>


              <div class="box-footer">
                <button type="submit" class="boton pull-right" >Enviar</button>
              </div>
              <?php
                $ingresarPersona = new ControladorPersonas();
                $ingresarPersona -> ctrCrearPersona();
              ?>
            </form>
                
          </div>
          <?php
                $inicio = new ControladorPaginaInicio();
                $inicio -> ctrLogin();
              ?>
        </div>
      </div>   
  </div>
</section>
  
</main>
<footer class="tamaño-max">

<!-- <section class="creadores col-lg-12" id="creadores">
<h3 class="center creadores-h3">Creadores</h3>

  <div class="contenedor">
    
    <div class="uno">
    <a href="https://www.instagram.com/anthonype07/" target="_blanq"><img src="vistas/img/dani.jpg" width="115"></a>
    <a href="https://www.instagram.com/v.belt_9/" target="_blanq"><img src="vistas/img/vivi.jpg" width="115"></a>
    </div>
    <div class="dos">
    <a href="https://www.instagram.com/deividc47/" target="_blanq"><img src="vistas/img/deivid.jpg" width="115"></a>
    <a href="https://www.instagram.com/jesus_reynardo/" target="_blanq"><img src="vistas/img/jesus.jpg" width="115"></a>
    </div>
    
    </div>
</section> -->
  <div class="enlaces">
  <a href="#">Terminos y condiciones</a>
  <br/>
  <a href="#">HydraCorp &copy; Todos los derechos reservados</a>

  </div>
    

</footer>



<script src="vistas/js/pagina-inicio.js"></script>
</body>