"use strict"


/*003minimize.js/.html: Función min(a, b)

Escriba una función min(a,b) la cual devuelva el menor de dos números a y b.

Por ejemplo:

min(2, 5) == 2

min(3, -1) == -1

min(1, 1) == 1*/



function min(a,b) {
    if (a < b) {
        return a;
      } else {
        return b;
      }
    }

    console.log(min(2,5));
    console.log(min(3, -1));  
    console.log(min(1, 1));