<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Tablero
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Tablero</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

  
  <div class="colum">
      
    <?php
    if($_SESSION["perfil"] =="1"){

      include "inicio/resumen-info.php";

    }
    
    if($_SESSION["perfil"] =="2"){

     include "inicio/perfil-cliente.php";

    }

    ?>

  </div> 

  <div class="colum">
      
    <?php
    if($_SESSION["perfil"] =="1"){
      include "reportes/grafico-prestamos.php";

    }
    ?>

    </div> 

  <div class="colum">
      
    <?php
    if($_SESSION["perfil"] =="1"){
      include "inicio/prestamos-recientes.php";

    }
    ?>

  </div> 

  <div class="colum">
  <?php

    if($_SESSION["perfil"] =="3" || $_SESSION["perfil"] =="4"){

      echo ' <div class="small-box bg-red">
              <div class="inner">
                <h3>' .$_SESSION["nombre"].'</h3>
                <p>Empleado</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              </div>';

}

?>
  </div>
    
   
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->