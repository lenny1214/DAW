"use strict";


/*023modifyThor.js/.html: Contesta los siguientes comentarios con respecto a 
la cadena que contiene la variable thor: 

let thor = "Thor es el hijo de Odín";
// Largo de la cadena
//Encontrar la letra o
//Encontrar el carácter que ocupa la posición 3
//¿Qué carácter ocupa la posición 1?
//Trocea la cadena usando los espacios en blanco
//Reemplaza Thor por Loki
//Recorta la cadena para que devuelva la palabra Odín
//¿Puedes encontrar la letra a? Demuéstralo
//Pon la mitad de la cadena en minúsculas (Sin usar las posiciones de 0 a 11)


*/


let thor = "Thor es el hijo de Odín";
// Largo de la cadena
alert(thor.length);
//Encontrar la letra o
let letraBuscada="o";
alert(thor.indexOf(letraBuscada));
//Encontrar el carácter que ocupa la posición 3
alert(thor.charAt(3));
//¿Qué carácter ocupa la posición 1?
alert(thor.charAt(1));
//Trocea la cadena usando los espacios en blanco

//Reemplaza Thor por Loki
let texto = "Thor es el hijo de Odín";
let nuevoTexto = texto.replace(/Thor/g, "Loki");

console.log(nuevoTexto);
//Recorta la cadena para que devuelva la palabra Odín

//¿Puedes encontrar la letra a? Demuéstralo
//Pon la mitad de la cadena en minúsculas (Sin usar las posiciones de 0 a 11)











































