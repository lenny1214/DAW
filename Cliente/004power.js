"use strict"


/*004power.js/.html: Función pow(x,n): Escriba la función pow(x,n) que 
devuelva x como potencia de n. O, 
en otras palabras, multiplique x por si mismo n veces y 
devuelva el resultado.
pow(3, 2) = 3 * 3 = 9
pow(3, 3) = 3 * 3 * 3 = 27
pow(1, 100) = 1 * 1 * ...* 1 = 1
Cree una página web que solicite x y n, y luego muestre el resultado de 
pow(x,n).
Nota: La función solo debe admitir valores naturales de n: enteros desde 1.*/


let num;
let expo;

num=prompt('Introduzca un número que quieras elevar');

expo=prompt('Introduzca un exponente al que elevar');

if(num<0||expo<0){
    alert('Los valores introducidos no pueden ser negativos');
}else{
    function elevar(num,expo){
        let resultado = Math.pow(num,expo);
    
        return resultado;
    
    
    }
}



let resultadoReal=elevar(num,expo);
alert (resultadoReal);


