<div class="content-wrapper">

  <section class="content">

  <div class="adicional">
    <div class="col-md-12">
      <?php
        $item = null;
        $valor = null;

        $tasa = ControladorPlantilla::ctrMostrarTasa($item, $valor);
        foreach ($tasa as $key => $value) {
        }
        $valor1 = $value["tasa"];

      ?>
        
        <div class="col-md-1"></div>
        <div class="col-lg-10 col-xs-10 ">
          <!-- Caja 2 -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php  echo $_SESSION["nombre"]; ?></h3>

              <p><?php  echo $_SESSION["usuario"]; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="formulario-inicio2" class="small-box-footer">Solicitar nuevo préstamo<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      
    </div>
  </div>
  
  <div class="row ">
      <div class="col-md-2"></div>
      <div class="box-body col-md-8">
      <h3>Tabla de cuotas</h3>
      
          <table class="table tablr-bordered table-striped dt-responsive tablas" width="100%">
            <thead>
              <tr>
                <th>Monto</th>
                <th>Capital</th>
                <th>Interes</th>
                <th>Mora</th>
                <th>Estado</th>
                <th>Fecha de Pago</th>
                <th>Forma limite</th>
               
           
              </tr>
            </thead>
            <tbody>
              <?php


              $item = "id_cliente";
              $valor = $_SESSION["cliente"];
              $prestamos = ControladorPrestamos::ctrMostrarPretamos($item, $valor);

              $item2 = null;
              $valor2 = null;
              $cuotas = ControladorCuotas::ctrMostrarCuotas($item2, $valor2);
              // var_dump($prestamos["id"]);
              for($i=0; $i<count($cuotas); $i++) {


                if($cuotas[$i]["id_prestamo"]==$prestamos["id"]){
                echo ' <tr>
                <td>'.$cuotas[$i]["monto"].'</td>
                <td>'.$cuotas[$i]["capital"].'</td>
                <td>'.$cuotas[$i]["interes"].'</td>
                <td>'.$cuotas[$i]["mora"].'</td>';

                if($cuotas[$i]["estado"]!=0){

                  echo '<td><button class="btn btn-success btn-xs btnActivar" estadoUsuario="0" >Saldado</button></td>';
                }else{
                  echo '<td><button class="btn btn-danger btn-xs btnActivar" estadoUsuario="1">Sin saldar</button></td>';
                }
                echo '<td>'.$cuotas[$i]["fecha_pago"].'</td>
                <td>'.$cuotas[$i]["fecha_limite"].'</td>
       
        
              </tr>';
                }
        # code...
              }
            ?>
            </tbody>
          </table>
        </div>
  </div> 
  
 
  </section>
 
</div>
