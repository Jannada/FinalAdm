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
    
      include "inicio/resumen-info.php";
    ?>

  </div> 

  <div class="colum">
      
    <?php
      include "reportes/grafico-prestamos.php";
    ?>

    </div> 

  <div class="colum">
      
    <?php
      include "inicio/prestamos-recientes.php";
    ?>

  </div> 
    
   
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->