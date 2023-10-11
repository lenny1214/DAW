"use strict"

/*007rewriteWithArrowFunction.js/.html:
 Reemplace las expresiones de función con funciones de flecha 
 en el código a continuación:

function ask(question, yes, no) {
  if (confirm(question)) yes();
  else no();
}
ask(
  "Do you agree?",
  function() { alert("You agreed."); },
  function() { alert("You canceled the execution."); }
);*/


const ask = (question, yes, no) => { //Es const, ya que no se pueden modificar
    if (confirm(question)) yes();
    else no();
  };
  
  // Ejemplo de uso:
  ask(
    "¿Estás de acuerdo?",
    () => alert("¡Estás de acuerdo!"),
    () => alert("No estás de acuerdo.")
  );
  









