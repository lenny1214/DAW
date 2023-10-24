"use strict";



/*014fixNumbers.js/.html: ¿Por qué 6.35.toFixed(1) == 6.3? 
Según la documentación Math.round y toFixed redondean al número más 
cercano: 0..4 hacia abajo mientras 5..9 hacia arriba. 
Por ejemplo:  alert( 1.35.toFixed(1) ); // 1.4
En el ejemplo similar que sigue, 
¿por qué 6.35 es redondeado a 6.3, y no a 6.4?
alert( 6.35.toFixed(1) ); // 6.3
¿Cómo redondear 6.35 de manera correcta?
*/



/*Lo que pasa es que cuando hay un número muy grande, se redondea hacia arriba,
se denomina punto de flote y es lo mismo que lo que hemos visto en un ejercicio
anterior*/























