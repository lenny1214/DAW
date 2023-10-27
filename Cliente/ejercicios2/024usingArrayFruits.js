"use strict";



/*024usingArrayFruits.js/.html: Ejecuta sobre el siguiente array las 
operaciones pedidas:
var fruits = ["Banana", "Manzana", "Fresa"];
//Añadimos cereza al principio
//Añadimos melocotón al final
//Mostrar el array elemento a elemento con for clásico
//Eliminamos el primer elemento.
//Eliminamos el último elemento.
//Mostrar cada elemento con for of o for in, lo que considere más adecuado.
*/

let fruits = ["Banana", "Manzana", "Fresa"];
//Añadimos cereza al principio

fruits.unshift("Cerezas");

alert (fruits);

//Añadimos melocotón al final
fruits.push("Melocoton")


alert (fruits);


//Mostrar el array elemento a elemento con for clásico

for (let i=0;i.length;i<5){
    alert (fruits[i]);
}


//Eliminamos el primer elemento.

fruits.shift();
alert (fruits);




//Eliminamos el último elemento.
fruits.pop();

alert(fruits);


//Mostrar cada elemento con for of o for in, lo que considere más adecuado.  



for (let fruit in fruits){
    alert (fruits[fruit]);
}



























