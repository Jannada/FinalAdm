<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Facturar
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Facturar</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">

      <!--=====================================
      EL FORMULARIO
      ======================================-->
      
      <div class="col-lg-6 col-xs-12">
        
        <div class="box box-success">
          
          <div class="box-header with-border"></div>

          <form role="form" metohd="post">

            <div class="box-body">
  
              <div class="box">

                <!--=====================================
                ENTRADA DEL VENDEDOR
                ======================================-->
            
                <div class="form-group">
                
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="Usuario Administrador" readonly>

                  </div>

                </div> 

                <!--=====================================
                ENTRADA DEL CODIGO DE FACTURA
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    
                    <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10002343" readonly>
                  
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA DEL CLIENTE
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <input type="text" class="form-control" id="cedulaCliente" name="cedulaCliente" placeholder="Documento del cliente">
                    
                    <span class="input-group-addon"><button type="button" class="btn btn-success btn-xs" id="buscarCliente">Agregar cliente</button></span>
                  
                  </div>
                  <br/>
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Nombre del cliente"readonly>
                    
                  
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA PARA AGREGAR CUOTAS A PAGAR 
                ======================================--> 

                <div class="form-group row nuevoProducto">

                  <!-- Fecha de cuota -->
                  
                  <div class="col-xs-6" style="padding-right:0px">
                  
                    <div class="input-group">
                      
                      <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></span>

                      <input type="text" class="form-control" id="agregarCuotas" name="agregarCuotas" placeholder="Fecha de cuotas" required>

                    </div>

                  </div>

                  <!-- Mora de cuotas -->

                  <div class="col-xs-3">
                    
                     <input type="number" class="form-control" id="moraCuota" name="moraCuota" min="1" placeholder="0" required readonly>

                  </div> 

                  <!-- Cuota a pagar -->

                  <div class="col-xs-3" style="padding-left:0px">

                    <div class="input-group">

                      <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                         
                      <input type="number" min="1" class="form-control" id="nuevoPrecioCuota" name="nuevoPrecioCuota" placeholder="000000" readonly required>
         
                    </div>
                     
                  </div> 

                </div>

                <!--=====================================
                BOTÓN PARA AGREGAR PRODUCTO
                ======================================-->

                <button type="button" class="btn btn-default hidden-lg">Agregar producto</button>

                <hr>

                <div class="row">

                  <!--=====================================
                  ENTRADA IMPUESTOS Y TOTAL
                  ======================================-->
                  
                  <div class="col-xs-8 pull-right">
                    
                    <table class="table">

                      <thead>

                        <tr>
                          <th>Mora</th>
                          <th>Total</th>      
                        </tr>

                      </thead>

                      <tbody>
                      
                        <tr>
                          
                          <td style="width: 40%">
                            
                            <div class="input-group">
                           
                              <input type="number" class="form-control" min="0" id="totalMora" name="totalMora" placeholder="0" readonly required>
                              <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                        
                            </div>

                          </td>

                           <td style="width: 40%">
                            
                            <div class="input-group">
                           
                              <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                              <input type="number" min="1" class="form-control" id="nuevoTotalVenta" name="nuevoTotalVenta" placeholder="00000" readonly required>
                              
                        
                            </div>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                  </div>

                </div>

                <hr>

                <!--=====================================
                ENTRADA MÉTODO DE PAGO
                ======================================-->

                <div class="form-group row">
                  
                  <div class="col-xs-6" style="padding-right:0px">
                    
                     <div class="input-group">
                  
                      <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                        <option value="">Seleccione método de pago</option>
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjetaCredito">Tarjeta Crédito</option>
                        <option value="tarjetaDebito">Tarjeta Débito</option>                  
                      </select>    

                    </div>

                  </div>

                  <div class="col-xs-6" style="padding-left:0px">
                        
                    <div class="input-group">
                         
                      <input type="text" class="form-control" id="nuevoCodigoTransaccion" name="nuevoCodigoTransaccion" placeholder="Código transacción"  required>
                           
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      
                    </div>

                  </div>

                </div>

                <br>
      
              </div>

          </div>

          <div class="box-footer">

            <button type="submit" class="btn btn-primary pull-right">Facturar</button>

          </div>

        </form>

        </div>
            
      </div>

      <!--=====================================
      LA TABLA DE PRODUCTOS
      ======================================-->

      <div class="col-lg-6 hidden-md hidden-sm hidden-xs">
        
        <div class="box box-warning">

          <div class="box-header with-border"></div>

          <div class="box-body">
            
            <table class="table table-bordered table-striped dt-responsive tablas">
              
               <thead>

                 <tr>
                  <th style="width: 10px">#</th>
                  <th>Monto</th>
                  <th>Capital</th>
                  <th>Interés</th>
                  <th>Fecha Limite</th>
                </tr>

              </thead>

              <tbody>

                <tr>
                  <td>1.</td>                 
                  <td>1208.33</td>
                  <td>979.167</td>
                  <td>18</td>   
                  <td>2019-09-09</td>     
                  <td>                 
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button> 
                    </div>
                  </td>
                </tr>

              </tbody>

            </table>

          </div>

        </div>


      </div>

    </div>
   
  </section>

</div>
