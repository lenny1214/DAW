"use strict";

/*005makeUser.js/.html: Aquí la función makeUser devuelve un objeto. ¿Cuál es el resultado de acceder a su 
atributo ref? ¿Por qué?

function makeUser() {
  return {
    name: "John",
    ref: this
  };
}
let user = makeUser();
alert( user.ref.name ); // ¿Cuál es el resultado?



El resultado de acceder a su atributo ref es que no hace referencia en sí mismo al objeto, si no al contexto en el que se ejecuta la función.






*/













