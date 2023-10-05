"use strict";

/*010findLongestSubstring.js Crea una función que tome una cadena de 
texto y encuentre la subcadena más larga sin caracteres repetidos.*/



function encontrarSubcadenaMasLarga(s) {
    let subcadena = '';
    let subcadenaTemporal = '';
    let inicio = 0;

    for (let i = 0; i < s.length; i++) {
        const caracter = s[i];
        const indiceRepetido = subcadenaTemporal.indexOf(caracter);

        if (indiceRepetido !== -1) {
            // Si se encuentra un carácter repetido, actualiza el índice de inicio
            inicio = inicio + indiceRepetido + 1;
        }

        subcadenaTemporal = s.slice(inicio, i + 1);

        if (subcadenaTemporal.length > subcadena.length) {
            subcadena = subcadenaTemporal;
        }
    }

    return subcadena;
}


const cadena = "Me gusta programar con JavaScript"; 
const subcadenaMasLarga = encontrarSubcadenaMasLarga(cadena);
console.log("Subcadena más larga sin caracteres repetidos:", subcadenaMasLarga);


