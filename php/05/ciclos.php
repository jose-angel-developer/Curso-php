<?php 	


	/*

		
		Las estructuras de control de ciclo en PHP permiten repetir un bloque de código un número determinado de veces o mientras se cumpla una condición. Las estructuras de control de ciclo en PHP incluyen:

	    for: Se utiliza para ejecutar un bloque de código un número determinado de veces.
	    while: Se utiliza para ejecutar un bloque de código mientras se cumpla una condición.
	    do-while: Se utiliza para ejecutar un bloque de código al menos una vez, y luego continuar ejecutándolo mientras se cumpla una condición.

		#for

		La estructura de control for se utiliza para ejecutar un bloque de código un número determinado de veces. La estructura de control for tiene la siguiente sintaxis:


	*/

		for (inicialización; condición; incremento) {
		    // Bloque de código que se repite
		}


		#Ejemplo 
		#El siguiente ejemplo muestra cómo utilizar la estructura de control for para imprimir los números del 1 al 10:

		for ($i = 1; $i <= 10; $i++) {
		    echo $i . "<br>";
		}

/*


		while

		La estructura de control while se utiliza para ejecutar un bloque de código mientras se cumpla una condición. La estructura de control while tiene la siguiente sintaxis:


*/
		while (condición) {
		    // Bloque de código que se repite
		}

		#Ejemplo
		#El siguiente ejemplo muestra cómo utilizar la estructura de control while para sumar los números del 1 al 10:

		$suma = 0;
		
		$i = 1;

		while ($i <= 10) {
		    $suma += $i;
		    $i++;
		}

		echo "La suma es: $suma";


/*


	do-while

	La estructura de control do-while se utiliza para ejecutar un bloque de código al menos una vez, y luego continuar ejecutándolo mientras se cumpla una condición. La estructura de control do-while tiene la siguiente sintaxis:


*/

	do {
	    // Bloque de código que se repite
	} while (condición);


	#Ejemplo
	#El siguiente ejemplo muestra cómo utilizar la estructura de control do-while para imprimir los números del 1 al 10:

	$i = 1;

	do {
	    echo $i . "<br>";
	    $i++;
	} while ($i <= 10);


?>