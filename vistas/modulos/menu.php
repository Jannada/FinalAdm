<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">
		<?php

<<<<<<< HEAD
		<?php

		if($_SESSION["perfil"] == 1){



			echo '<li>
=======
		if($_SESSION["perfil"]=="1"||$_SESSION["perfil"]=="2"|| $_SESSION["perfil"]=="3"||$_SESSION["perfil"]=="4"){
			echo '
>>>>>>> vivi


			<li class="active">
				<a href="inicio">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>';}

<<<<<<< HEAD
			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-users"></i>
					<span>Usuarios</span>

				</a>

			</li>';

			
		}

		if($_SESSION["perfil"] == 1 || $_SESSION["perfil"] == 2){
		
				echo '<li>
=======
		   if($_SESSION["perfil"]=="1"){
			echo '
					<li>
						<a href="usuarios">
							<i class="fa fa-user"></i>
							<span>Usuario</span>
						</a>
					</li>

					
				<li>
>>>>>>> vivi
				<a href="clientes">

				<i class="fa fa-user-circle"></i>
					<span>Clientes</span>

				</a>

			</li>';
		}
		

		if($_SESSION["perfil"] == 1){

			echo '<li>

				<a href="empleados">

				<i class="fa fa-id-card"></i>
					<span>Empleados</span>

				</a>

<<<<<<< HEAD
			</li>';
		}
		
		
		if($_SESSION["perfil"] == 1 || $_SESSION["perfil"] == 3){
=======
			</li>	';
		}	
		if($_SESSION["perfil"]=="1" || $_SESSION["perfil"]=="4" ){
			echo '
>>>>>>> vivi

			echo '<li class="treeview">

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

<<<<<<< HEAD
			</li>';
		}

		if($_SESSION["perfil"] == 1 || $_SESSION["perfil"] == 3){

			echo '<li class="treeview">
=======
		</li>';
				}

					
		if($_SESSION["perfil"]=="1" || $_SESSION["perfil"]=="3"){
					echo '
			<li class="treeview">
>>>>>>> vivi

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

<<<<<<< HEAD
				 echo </li>';
		}

		?>
=======
			</li>';
		}
			?>
>>>>>>> vivi

		</ul>
		

	 </section>

</aside>