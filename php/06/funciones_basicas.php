<?php


		#funciones basicas

			$cadena = "El perro duerme";

		#longitud
			print strlen($cadena);
				echo "<br />";

		#numero por palabras
			print str_word_count($cadena);
				echo "<br />";

		#reversa 
			print strrev($cadena);
				echo "<br />";

		#encontrar la posicion del texto contando cada letra y espacion
			print strpos($cadena, "duerme");
				echo "<br />";

		#remplazar texto
				print str_replace("duerme", "come", $cadena);
					echo "<br />";

		#convertir a minusculas
					print strtolower($cadena); 
						echo "<br />";

		#convertir a mayusculas 
					print strtoupper($cadena);
						echo "<br />";


		#substraer cadena 
					print substr($cadena, 9, 3);
						echo "<br />";

		#quitar espacios en blanco
					print trim("hola    casa  perro");


?>