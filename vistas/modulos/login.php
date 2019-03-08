<div id="back"></div>
<div class="login-box">
  <div class="login-logo">
    <!-- <img src="vistas/img/plantilla/logo-blanco-bloque.png" class="img-responsive" stylr="padding: 30px 100px opx 100px" alt=""> -->
</div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar al sistema </p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-4 ">
          <button type="submit" class="btn btn-info btn-block btn-flat">Ingresar</button>
        </div>
      </div>
      <!-- Creando el objeto para el login -->
      <!-- <?php
        // $login = new ControladorUsuarios();
        // $login -> crtIngresoUsuario();
      ?> -->

    </form>
  </div>
</div>