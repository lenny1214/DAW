"use strict";

/*016fixInfinityLoop.js/.html: Este bucle es infinito. 
Nunca termina, ¿por qué?
let i = 0;
while (i != 10) {
  i += 0.2;
}*/


let i = 0;
while (i != 10) {
  i += 0.2;
  if(i>=10){
    break;

    
}


}
console.log (i);




