"use strict";

/*027transformSnakeToCamel.js/.html: Escribe la función camelize(str) 
que convierta palabras separadas por _como “mi_cadena_corta” en palabras 
con mayúscula “miCadenaCorta”. Esto sería: quitar todos los _ y que cada 
palabra después de _ comience con mayúscula. Ejemplos:
camelize("background_color") == 'backgroundColor';
camelize("list_style_image") == 'listStyleImage';
camelize("_webkit_transition") == 'WebkitTransition';
P.D. Pista: usa split para dividir el string en un array, transfórmalo y 
vuelve a unirlo (join).
*/

function camelize(str) {
    let palabras = str.split('_');

    for (let i=1; i<palabras.length;i++){
        palabras[i]=palabras[i].charAt(0).toUpperCase()+ palabras[i].slice(1);

    }

    let result=palabras.join('');
    return resultado;
}

camelize("background_color") == 'backgroundColor';
camelize("list_style_image") == 'listStyleImage';
camelize("_webkit_transition") == 'WebkitTransition';










































