<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Administrar clientes
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar clientes</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
        <div class="box-header with-border">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">Agregar usuario</button>
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
                <th>Calificaion</th>
                <th>Fecha de nacimiento</th>
                <th>Ultimo login</th>
                <th>Acciones</th>
           
              </tr>
            </thead>
            <tbody>

            <?php

                $item = null;
                $valor = null;

                $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

                for($i=0; $i < count($clientes); $i++){

                echo ' <tr>
                <td>'.($i+1).'</td>
                <td>'.$clientes[$i]["nombre"].'</td>
                <td>'.$clientes[$i]["documento"].'</td>
                <td>'.$clientes[$i]["telefono"].'</td>
                <td>'.$clientes[$i]["direccion"].'</td>
                <td>'.$clientes[$i]["email"].'</td>
                <td>5 estrellas</td>
                <td>'.$clientes[$i]["fecha_nacimiento"].'</td>
                <td>'.$clientes[$i]["fecha"].'</td>
                <td>
                <div class="btn-group">
                          
                <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$clientes[$i]["id"].'"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btnEliminarCliente" idCliente="'.$clientes[$i]["id"].'"><i class="fa fa-times"></i></button>

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

<!-- MODAL AGREGAR CLIENTES -->
  <!-- Modal -->
  <div id="modalAgregarCliente" class="modal fade" role="dialog">
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
              <input type="text" class="form-control input-lg" name="nuevoUsuario" required placeholder="Nombre">
            </div>
          </div>

          <!-- ENTRADA PARA CONTRASEÑA -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoPassword" required placeholder="Documento">
            </div>
          </div>

          <!-- ENTRADA PARA CONTRASEÑA -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoPassword" required placeholder="telefono">
            </div>
          </div>

          <!-- ENTRADA PARA CONTRASEÑA -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoPassword" required placeholder="Email">
            </div>
          </div>

          <!-- ENTRADA PARA CONTRASEÑA -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoPassword" required placeholder="Fecha de nacimiento">
            </div>
          </div>

          <!-- ENTRADA PARA CONTRASEÑA -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoPassword" required placeholder="Usuario">
            </div>
          </div>

          <!-- ENTRADA PARA CONTRASEÑA -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoPassword" required placeholder="Contraseña">
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

 <!-- MODAL EDITAR CLIENTES -->
  <!-- Modal -->
  <div id="modalEditarCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    <form role="form" method="post" encryptype="multipart/form-data">

      <div class="modal-header" style="background: #3c8dbc; color:#fff ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar usuario</h4>
      </div>

      <div class="modal-body">
        <div class="box-body">
   

          <!-- ENTRADA PARA EL NOMBRE -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente">
              <input type="hidden" name="idCliente" id="idCliente">
            </div>
          </div>

          <!-- ENTRADA PARA EL DOCUMENTO -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" id="editarDocumentoCliente2" required data-inputmask="'mask':'999-9999999-9'" data-mask>
              <input type="hidden" name="editarDocumentoCliente" id="editarDocumentoCliente">
            </div>
          </div>

          <!-- ENTRADA PARA LA DIRECCION -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="editarDireccionCliente" id="editarDireccionCliente" required>
            </div>
          </div>

          <!-- ENTRADA PARA TELEFONO -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" required data-inputmask="'mask':'(999) 999-9999'" data-mask>
            </div>
          </div>

          <!-- ENTRADA PARA EL EMAIL -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="editarEmail" id="editarEmail" required>
            </div>
          </div>

          <!-- ENTRADA PARA FECHA DE NACIMIENTO -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="editarFechaNacimiento" id="editarFechaNacimiento" required data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
            </div>
          </div>

        </div>
      </div>

          <!-- PIE DEL MODAL -->

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar usuario</button>

      </div>

      <?php
      
              $editarCliente = new ControladorClientes();
              $editarCliente -> ctrEditarCliente();
      ?>
    </form>

    </div>
  </div>
</div>
<?php

  $eliminarCliente = new ControladorClientes();
  $eliminarCliente -> ctrEliminarCliente();

?>
