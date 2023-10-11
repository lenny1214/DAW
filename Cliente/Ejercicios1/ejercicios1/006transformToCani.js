"use strict"

/*006transformToCani.js/.html: Crear una función 
que reciba una cadena y la devuelva transformada en
Cani. Por ejemplo, si le pasamos a la función la
cadena "una cadena cani es como ésta" obtendremos 
"UnA KaDeNa kAnI Es kOmO EsTaHHH". 
Para ello, hay que alternar el uso de MAYÚSCULAS y 
minúsculas, sustituir la letra C por la K y añadir
tres letras H al final.*/

function transformarACani(cadena) {
    let resultado = '';
    let alternarMayusculas = true;

    for (let i = 0; i < cadena.length; i++) {
        let caracter = cadena.charAt(i);

        if (caracter === 'c' || caracter === 'C') {
            resultado += 'K';
        } else {
            resultado += alternarMayusculas ? caracter.toUpperCase() : caracter.toLowerCase();
        }

        alternarMayusculas = !alternarMayusculas;
    }

}



















