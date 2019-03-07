<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Administrar usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar Usuarios</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
        <div class="box-header with-border">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar usuario</button>
        </div>
        
        <div class="box-body">
          <table class="table tablr-bordered table-striped dt-responsive tablas" width="100%">
            <thead>
              <tr>
                <th style="width:10px;">#</th>
                <th>Usuario</th>
                <th>documento</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>fecha</th>
                <th>Acciones</th>
           
              </tr>
            </thead>
            <tbody>
            <?php
            $item = null;
            $valor = null;

            $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);



           for($i=0; $i < count($usuarios); $i++){

            $item = "id";
            $valor = $usuarios[$i]["id_empleado"];
            $empleados = ControladorEmpleados::ctrMostrarEmpleados($item, $valor);

            $item2 = "id";
            $valor2 = $usuarios[$i]["id_cliente"];
            $clientes = ControladorClientes::ctrMostrarClientes($item2, $valor2);

            // var_dump($valor);
            // var_dump($empleados["documento"]);


              echo '
              <tr>
                    <td>'.($i+1).'</td>
                    <td>'.$usuarios[$i]["usuario"].'</td>';

                    if ($usuarios[$i]["perfil"]=="Cliente") {
                      echo '<td>'.$clientes["documento"].'</td>';
                    }else{
                      echo '<td>'.$empleados["documento"].'</td>';
                    }
                    echo '<td>'.$usuarios[$i]["perfil"].'</td>
                    <td><button class="btn btn-success btn-xs">Activado</button></td>
                    <td>'.$usuarios[$i]["fecha"].'</td>
                    <td>
                  <div class="btn-group">
                  <button class="btn btn-warning" ><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger" ><i class="fa fa-times"></i></button>

                  </div>
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
   
       <!-- ENTRADA PARA SELECCIONAR EL EMPLEADO -->

       <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <select class="form-control input-lg" name="nuevoPerfil">
                <option value="">Seleccionar empleado</option>
                <option value="Administrador">Juan Carlos - 9898866550</option>
                <option value="Empleado">Pedro Martinez - 8765444333</option>
              </select>
            </div>
          </div>

          <!-- ENTRADA PARA EL USUARIO -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoUsuario" required placeholder="Ingresa usuario">
            </div>
          </div>

          <!-- ENTRADA PARA CONTRASEÑA -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
              <input type="password" class="form-control input-lg" name="nuevoPassword" required placeholder="Ingresa contraseña">
            </div>
          </div>
          
            <!-- ENTRADA PARA EL PERFIL -->
            <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoUsuario" readonly required placeholder="Perfil">
            </div>
          </div>

        </div>
      </div>

          <!-- PIE DEL MODAL -->

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar usuario</button>

      </div>
    </form>

    </div>
  </div>
</div>

