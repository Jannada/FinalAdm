<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">
		<?php

		if($_SESSION["perfil"]=="1"||$_SESSION["perfil"]=="2"|| $_SESSION["perfil"]=="3"||$_SESSION["perfil"]=="4"){
			echo '


			<li class="active">
				<a href="inicio">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>';}

		   if($_SESSION["perfil"]=="1"){
			echo '
					<li>
						<a href="usuarios">
							<i class="fa fa-user"></i>
							<span>Usuario</span>
						</a>
					</li>

					
				<li>
				<a href="clientes">

				<i class="fa fa-user-circle"></i>
					<span>Clientes</span>

				</a>

			</li>

			<li>

				<a href="empleados">

				<i class="fa fa-id-card"></i>
					<span>Empleados</span>

				</a>

			</li>	';
		}	
		if($_SESSION["perfil"]=="1" || $_SESSION["perfil"]=="4" ){
			echo '

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Prestamos</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="prestamos">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar prestamos</span>

						</a>

					</li>

					<li>

						<a href="crear-prestamos">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear prestamo</span>

						</a>

					</li>'; 
				
				}
				

				if($_SESSION["perfil"]=="1"){
					echo '<li>

					<a href="cuotas">
						
						<i class="fa fa-circle-o"></i>
						<span>Administras cuotas</span>

					</a>

				</li> 

				<li>

					<a href="reportes">
						
						<i class="fa fa-circle-o"></i>
						<span>Reporte de prestamos</span>

					</a>

				</li> 

			</ul>

		</li>';
				}

					
		if($_SESSION["perfil"]=="1" || $_SESSION["perfil"]=="3"){
					echo '
			<li class="treeview">

				<a href="#">

					<i class="fa fa-credit-card-alt"></i>
					
					<span>Facturas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="facturas">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar facturas</span>

						</a>

					</li>

					<li>

						<a href="crear-factura">
							
							<i class="fa fa-circle-o"></i>
							<span>Facturar</span>

						</a>

					</li>

				</ul>

			</li>';
		}
			?>

		</ul>

	 </section>

</aside>