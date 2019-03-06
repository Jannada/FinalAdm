<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Administrar cuotas
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar cuotas</li>
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
                <th style="width:10px;">##</th>
                <th>Usuario</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>fecha</th>
                <th>Acciones</th>
           
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Administrador</td>
                    <td>ADM</td>
                    <td><button class="btn btn-success btn-xs">Activado</button></td>
                    <td>00-00-0000</td>
                    <td>
                  <div class="btn-group">
                  <button class="btn btn-warning" ><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger" ><i class="fa fa-times"></i></button>

                  </div>
                </tr>
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

