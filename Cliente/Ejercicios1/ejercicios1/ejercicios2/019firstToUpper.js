"use strict";


/*019firstToUpper.js/.html: Escribe una función ucFirst(str)
que devuelva el string str con el primer carácter en mayúscula,
 por ejemplo:
ucFirst("john") == "John";*/



function ucFirst(str) {

    if(str.length===0){
        return str;
    }

    return str[0].toUpperCase()+str.slice(1);/*En este caso la posición 0 del str
    la pone en mayúscula, y se concatena al resto de la longitud*/


}

let texto ="hola guapos";
let textoModificado=ucFirst(texto);
alert(textoModificado);









































