<?php  

        #Operadores aritméticos

            $a = 10;
            $b = 5;

            // Suma
            echo $a + $b; // 15

            // Resta
            echo $a - $b; // 5

            // Multiplicación
            echo $a * $b; // 50

            // División
            echo $a / $b; // 2

            // Módulo
            echo $a % $b; // 0

            // Exponente
            echo $a ** $b; // 100



        #Operadores lógicos

            $a = true;
            $b = false;

            // AND lógico
            echo $a && $b; // false

            // OR lógico
            echo $a || $b; // true

            // Negación
            echo !true; // false

            // Igual
            echo $a == $b; // false

            // Diferente
            echo $a != $b; // true

            // Menor que
            echo $a < $b; // false

            // Mayor que
            echo $a > $b; // true

            // Menor o igual que
            echo $a <= $b; // true

            // Mayor o igual que
            echo $a >= $b; // false


        #Operadores de asignación

            $a = 10;

            // Asignación
            $b = $a;
            echo $b; // 10

            // Asignación con suma
            $a += 5;
            echo $a; // 15

            // Asignación con resta
            $a -= 5;
            echo $a; // 10

            // Asignación con multiplicación
            $a *= 5;
            echo $a; // 50

            // Asignación con división
            $a /= 5;
            echo $a; // 10

            // Asignación con módulo
            $a %= 5;
            echo $a; // 0

            // Asignación con exponente
            $a **= 5;
            echo $a; // 100



        #Operadores de incremento/decremento

            $a = 10;

            // Incremento
            $a++;
            echo $a; // 11

            // Decremento
            $a--;
            echo $a; // 10

           

        #Otros operadores

            $a = new Clase;

            // Acceso a propiedades
            $a->nombre = "Juan";
            echo $a->nombre; // Juan

            // Acceso a métodos
            $a->saludar(); // Hola, soy Juan

            // Acceso a elementos de un array
            $a = [1, 2, 3, 4, 5];
            echo $a[0]; // 1



?>