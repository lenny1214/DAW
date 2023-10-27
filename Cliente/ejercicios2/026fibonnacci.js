"use strict";


/*026fibonnacci.js/.html: Crear un array que contenga los 20 primeros 
números de Fibonacci.*/



function Fibonacci(n) {
    let fibo=[0,1];
    for (let i=2;i<n;i++){
        let num=fibo[i-1]+fibo[i-2];
        fibo.push(num);
    }

return Fibonacci;





}
let just20fibo=Fibonnacci(20); 
console.log(just20fibo);


















































