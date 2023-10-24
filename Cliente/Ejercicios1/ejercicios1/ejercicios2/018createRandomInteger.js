"use strict";

/*018createRandomInteger.js/.html: 
Crea una función randomInteger(min, max) que genere un número entero 
aleatorio entre min y max incluyendo ambos, min y max, como valores posibles.
Todo número del intervalo min..max debe aparecer con la misma probabilidad. 
Ejemplos de funcionamiento:
alert( randomInteger(1, 5) ); // 1
alert( randomInteger(1, 5) ); // 3
alert( randomInteger(1, 5) ); // 5
*/




function randomInteger(min, max) { //El math floor lo que hace es que el primer valor es el máximo y el segundo el mínimo
    return Math.floor(Math.random() * (max - min + 1)) + min;

}







alert( randomInteger(1, 5) ); // 1
alert( randomInteger(1, 5) ); // 3
alert( randomInteger(1, 5) ); // 5




















