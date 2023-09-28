/*001requiredElse.js/.html: ¿Es "else" requerido?
La siguiente función devuelve true si el parámetro age es mayor a 18.
 De lo contrario, solicita una confirmación y devuelve su resultado:
function checkAge(age) {
  if (age > 18) {
    return true;
  } else {
    // ...
    return confirm('¿Tus padres te permitieron?');
  }
}
¿Funcionará la función de manera diferente si se borra else? 
¿Hay alguna diferencia en el comportamiento de estas dos variantes?



En este caso vemos claramente como la función va a devolver en casi de 
que la edad sea mayor que 18, va a retornar true, en caso de que no lo sea 
va a soliciar confirmación parental. En el caso de que quitásemos el "else",
funcionaría exactamente igual pero el código no sería tan claro y podría
llegar a confundir a un programador que no esté en un nivel avanzado todavía.



















