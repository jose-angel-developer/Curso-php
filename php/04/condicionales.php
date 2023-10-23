<?php 

/*

	Las estructuras de control condicionales en PHP permiten controlar el flujo de ejecución del programa en función del valor de una condición. Las estructuras de control condicionales incluyen:

	    if-else: Se utiliza para ejecutar un bloque de código si una condición es verdadera.
	    switch: Se utiliza para ejecutar un bloque de código específico en función del valor de una variable.

	if-else

	La estructura de control if-else se utiliza para ejecutar un bloque de código si una condición es verdadera. La estructura de control if-else tiene la siguiente sintaxis:

*/


	if (condición) {
	    // Bloque de código que se ejecuta si la condición es verdadera
	} else {
	    // Bloque de código que se ejecuta si la condición es falsa
	}

	#ejemplo: 

	$numero = 15;

	if ($numero > 10) {
	    echo "El número es mayor que 10";
	} else {
	    echo "El número es menor o igual que 10";
	}

/*

	switch

	La estructura de control switch se utiliza para ejecutar un bloque de código específico en función del valor de una variable. La estructura de control switch tiene la siguiente sintaxis:

*/

	switch ($variable) {
	    case valor1:
	        // Bloque de código que se ejecuta si $variable es igual a valor1
	        break;
	    case valor2:
	        // Bloque de código que se ejecuta si $variable es igual a valor2
	        break;
	    default:
	        // Bloque de código que se ejecuta si $variable no es igual a ninguno de los valores anteriores
	}

	#ejemplo: 

	$dia = "martes";

	switch ($dia) {
	    case "lunes":
	        echo "Hoy es lunes";
	        break;
	    case "martes":
	        echo "Hoy es martes";
	        break;
	    case "miércoles":
	        echo "Hoy es miércoles";
	        break;
	    default:
	        echo "No sé qué día es";
	}


/*

	PHP proporciona una serie de operadores condicionales que se pueden utilizar para evaluar condiciones. Los operadores condicionales incluyen:

    ==: Igual a
    !=: Distinto de
    <: Menor que
    <=: Menor o igual que
    >: Mayor que
    >=: Mayor o igual que
    &&: Y lógico
    ||: O lógico



    Ejemplo

	El siguiente ejemplo muestra cómo utilizar los operadores condicionales para comprobar si un número es mayor que 10:


*/

	$numero = 15;

	// Comprobar si el número es mayor que 10
	if ($numero > 10) {
	    echo "El número es mayor que 10";
	}

	// Comprobar si el número es menor o igual que 10
	if ($numero <= 10) {
	    echo "El número es menor o igual que 10";
	}

	// Comprobar si el número es mayor que 10 y menor que 20
	if ($numero > 10 && $numero < 20) {
	    echo "El número está entre 10 y 20";
	}

	// Comprobar si el número es mayor que 10 o menor que 5
	if ($numero > 10 || $numero < 5) {
	    echo "El número es mayor que 10 o menor que 5";
	}


?>