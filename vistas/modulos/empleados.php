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
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="password" class="form-control input-lg" name="nuevoPassword" required placeholder="Ingresa contraseña">
            </div>
          </div>
          
          <!-- ENTRADA PARA SELECCIONAR PERFIL -->

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <select class="form-control input-lg" name="nuevoPerfil">
                <option value="">Seleccionar perfil</option>
                <option value="Administrador">Administrador</option>
                <option value="Empleado">Empleado</option>
                <option value="Cliente">Cliente</option>
              </select>
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

