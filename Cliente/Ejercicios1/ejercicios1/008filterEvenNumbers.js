"use strict"

/*008filterEvenNumbers,js Escribe una función que tome un array de números 
y devuelva un nuevo array que solo contenga los números pares. 
Utiliza una función flecha para realizar esta operación.*/


/*En esta primera línea lo que estamos declarando es el filtro(función predeterminada), que va a ser de arrays y el filtro 
que le vamos a meter espara que muestre aquellos con los que
la división entre 2 sea estrictamente igaul*/
const filterEvenNumbers = (arr) => arr.filtrer((num) => num % 2 === 0);{
    const numeros=[1,2,3,4,5,6,7,8,9,10];
    const numPar=filterEvenNumbers(numeros);
    console.log(numPar);

}









