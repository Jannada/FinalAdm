<?php 
  if($_SESSION["perfil"]!="1"){
    echo '<script>
        window.location = "inicio";
        </script>';
        return;

        
  }
  ?>
  
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Administrar empleados
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar empleados</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
        <div class="box-header with-border">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar empleado</button>
        </div>
        
        <div class="box-body">
          <table class="table tablr-bordered table-striped dt-responsive tablas" width="100%">
            <thead>
              <tr>
                <th style="width:10px;">#</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>perfil</th>
                <th>Fecha de nacimiento</th>
                <th>Acciones</th>
           
              </tr>
            </thead>
            <tbody>
            <?php 
            $item = null;
            $valor = null;

            $empleados = ControladorEmpleados::ctrMostrarEmpleados($item, $valor);

            for($i=0; $i< count($empleados); $i++){

              $item2 = "id";
              $valor2 = $empleados[$i]["id_perfil"];

              $perfiles = ControladorUsuarios::ctrMostrarPerfil($item2, $valor2);
              echo ' <tr>
                    <td>'.($i+1).'</td>
                    <td>'.$empleados[$i]["nombre"].'</td>
                    <td>'.$empleados[$i]["documento"].'</td>
                    <td>'.$empleados[$i]["telefono"].'</td>
                    <td>'.$empleados[$i]["direccion"].'</td>
                    <td>'.$empleados[$i]["email"].'</td>
                    <td>'.$perfiles["perfil"].'</td>
                    <td>'.$empleados[$i]["fecha_nacimiento"].'</td>
                    <td>
                    <div class="btn-group">
                          
                    <button class="btn btn-warning btnEditarEmpleado" data-toggle="modal" data-target="#modalEditarEmpleado" idEmpleado="'.$empleados[$i]["id"].'"><i class="fa fa-pencil"></i>
                    </button>

                   <button class="btn btn-danger btnEliminarEmpleado" idEmpleado="'.$empleados[$i]["id"].'"><i class="fa fa-times"></i></button></div>  
                </tr>';
            }

               
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

  <!-- Modal Agregar Usuario -->
  <!-- Modal -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    <form role="form" method="post" encryptype="multipart/form-data">

      <div class="modal-header" style="background: #3c8dbc; color:#fff ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar usuario</h4>
      </div>

      <div class="modal-body">
        <div class="box-body">
   

          <!-- ENTRADA PARA EL USUARIO -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoEmpleado" required placeholder="Ingresar Empleado">
            </div>
          </div>

           <!-- ENTRADA PARA EL Documento -->
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoDocumento" required placeholder="Documento">
            </div>
          </div>

           <!-- ENTRADA PARA TELEFONO -->
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoTelefono" required placeholder="Telefono">
            </div>
          </div>

           <!-- ENTRADA PARA LA DIRECCION -->
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoDireccion" required placeholder="Direccion">
            </div>
          </div>
           <!-- ENTRADA PARA EMAIL -->
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="email" class="form-control input-lg" name="nuevoEmail" required placeholder="Ingresa tu correo">
            </div>
          </div>

           <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
           <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

         
          
          <!-- ENTRADA PARA SELECCIONAR PERFIL -->

          <div class="form-group">
          
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <select class="form-control input-lg" name="nuevoPerfil">
              <option value="">Seleccionar perfil</option>
              

              <?php

               $item = null;
               $valor = null;

               $perfiles = ControladorUsuarios::ctrMostrarPerfil($item, $valor);

               foreach($perfiles as $key => $value){

                if($value["id"]!=2){

                  echo '<option value='.$value["id"].'>'.$value["perfil"].'</option>';
                }

                
               }
              
              ?>
              
              </select>
            </div>
          </div>


        </div>
      </div>

          <!-- PIE DEL MODAL -->

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar empleado</button>

      </div>
              <?php
                $empleado = new ControladorEmpleados();
                $empleado -> ctrCrearEmpleado();
              ?>
      </form>

    </div>
  </div>
</div>

<!--=====================================
MODAL EDITAR Empleado
======================================-->

<div id="modalEditarEmpleado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Empleado</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarEmpleado" id="editarEmpleado" required>
                <input type="hidden" id="idEmpleado" name="idEmpleado">
              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="editarDocumento" id="editarDocumento" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion"  required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="editarFechaNacimiento" id="editarFechaNacimiento"  data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

        $editarCliente = new ControladorEmpleados();
        $editarCliente -> ctrEditarEmpleado();

      ?>

    

    </div>

  </div>

</div>

<?php

    $eliminarCliente = new ControladorEmpleados();
    $eliminarCliente -> ctrBorrarEmpleado();

?>




