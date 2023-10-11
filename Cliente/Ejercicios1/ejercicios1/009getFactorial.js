/*009getFactorial.js  Escribe una función que tome un número entero positivo
 como argumento y devuelva su factorial. El factorial de un número es el 
 producto de todos los enteros positivos desde 1 hasta ese número*/


 
function calcularFactorial(num){
    if(num === 0 || num === 1){ //Comprobamos que si el numero es 0 o 1, nos devuelva su factorial, es decir, 1
        return 1;

    }else if (num < 1){
        return "No se puede calcular el factorial de un número negativo"
    }else {

        let factorial=1;
        for(let i=1; i<=num; i++){
            factorial*=i;
        }
        return factorial;
    }


    const num = 5; // Cambia este número para calcular el factorial de otro valor
    const resultado = calcularFactorial(num);
    console.log(`El factorial de ${numero} es ${resultado}`);
}