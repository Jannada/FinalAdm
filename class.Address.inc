<?php

//Direccion física del usuario 

	class Direccion{
		//Calle de la Direccion
		public $calle_direccion_1;
		public $calle_direccion_2;

		//nombre de la ciudad
		public $ciudad_nombre;

		//subdivision
		public $subdivision_nombre;

		//codigo postal
		public $codigo_postal;

		//nombre del pais 
		public $nombre_pais;
		
		function display(){
			$salida= '';

			//Calle de la Direccion	
			$salida .= $this->calle_direccion_1;

			if(isset($calle_direccion_2)){
				//isset para verificar si posee un valor
				$salida .= '</br>' . $this->calle_direccion_2;
			}

			$salida .= '</br>';
			$salida .= $this->ciudad_nombre . ', ' . $this->subdivision_nombre . ', ' . $this->codigo_postal;
			
			$salida .= '</br>';
			$salida .= $this->nombre_pais;

			return $salida; 
		}
	}
	
?>