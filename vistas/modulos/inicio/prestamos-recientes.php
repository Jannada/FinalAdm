<!-- Prestamos recientes -->

<?php

         $item = null;
         $valor = null;
        // $orden = "id";

        $prestamos = ControladorPrestamos::ctrMostrarPretamos($item, $valor);
        $totalPrestamos = count($prestamos);

        
        // $productos = ControladorProductos::ctrMostrarProductos($item, $valor);
        
        ?>
        
        
        <div class="box box-primary">
          
          <div class="box-header with-border">
            
            <h3 class="box-title">Prestamos Recientes</h3>
            
          
            
          </div>
                  
            
          <div class="box-body">
          
            <ul class="products-list product-list-in-box">
                
            <?php
            
            for($i = 0; $i < 5; $i++){
              
              echo '<li class="item">
                
                  <div class="product-info">
                    
                    <a href="" class="product-title">$
                      
                      '.$prestamos[$i]["total"].'
                      
                      <span class="label label-warning pull-right">'.$prestamos[$i]["fecha"].'</span>
                      
                      </a>
                      
                      </div>
                      
                      </li>';
                      
              }
                    
              ?>
              </ul>

              </div>
              <!-- <div class="box-footer text-center">
                <a href="productos" class="uppercase">Ver todos los productos</a>
              </div> -->
            </div>