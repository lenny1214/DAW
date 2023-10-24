"use strict";
/*015readNumber.js/.html: Crea una función readNumber que pida 
un número hasta que el visitante ingrese un valor numérico válido.
 El valor resultante debe ser devuelto como number. 
 El visitante puede también detener el proceso ingresando una línea vacía 
 o presionando “CANCEL”. En tal caso la función debe devolver null*/


 function readNumber() {
    let num1;
    
    while(true){
        num1=prompt("Dame un número:");

        if(num1==null||num1==""){
            return null;
    }

    let numero=parseFloat(num1);


    if (!isNaN(numero)){ //Comprobamos que el número no está vacío
        return numero;

    }else{
        alert("Por favor intruduzca un número válido")
    }


    }

}

let numeroB = readNumber(); //Damos valor de la función a la variable 

if(numeroB!==null){ //Comprobamos que si le da a cancelar sea nulo el resultado y te muestre el mensaje destacado, y en caso contrario lo otro.
    alert("Número ingresado: " + numeroB)
}else{
    alert("Proceso cancelado por el usuario")
}
























