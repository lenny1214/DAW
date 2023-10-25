"use strict";

/*
020checkSpan.js/.html: Escribe una función checkSpam(str) que devuelva
true si str contiene ‘viagra’ o ‘XXX’, de lo contrario false. 
La función debe ser insensible a mayúsculas y minúsculas:
checkSpam('compra ViAgRA ahora') == true
checkSpam('xxxxx gratis') == true
checkSpam("coneja inocente") == false
*/


function checkSpam(str) {
    return(str.indexOf("ViAgRA")>-1||str.indexOf("xxx")>-1); 
}
 

checkSpam('compra ViAgRA ahora') == true //Este será el valor true
checkSpam('xxxxx gratis') == true
checkSpam("coneja inocente") == false

































