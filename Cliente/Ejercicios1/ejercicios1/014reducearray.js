"use strict";

/*014reduceArray.js Crea una función llamada reduceArray que tome un array
 de números y utilice el método reduce para devolver la suma de todos 
 los elementos. Utilice las funciones flecha.*/



let reduceArray = (num) => num.reduce((acc, num) => acc + num,0);{
    
}
let numeros=[1,2,3,4,5,6,7,8,9,10];
let resultado=reduceArray(numeros);
console.log(numeros);