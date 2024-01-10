"use strict"


/*006handlers.html/.js: Hay un botón en la variable. No hay handlers en él.
¿Qué handlers se ejecutan con el click después del siguiente código? ¿Qué alertas se
muestran?
button.addEventListener(&quot;click&quot;, () =&gt; alert(&quot;1&quot;));
button.removeEventListener(&quot;click&quot;, () =&gt; alert(&quot;1&quot;));
button.onclick = () =&gt; alert(2);*/



/*addEventListener("click", () => alert("1")): Se añade un manejador de eventos que mostrará la alerta "1" al hacer clic en el botón.

removeEventListener("click", () => alert("1")): Inmediatamente después, se intenta quitar el mismo manejador de eventos. Sin embargo, 

esto no funcionará correctamente, ya que la función de callback proporcionada a removeEventListener no es exactamente la misma que la proporcionada a addEventListener.

button.onclick = () => alert(2);: Se asigna un nuevo manejador de eventos al clic en el botón, que mostrará la alerta "2". 

Esta asignación sobrescribe el manejador de eventos anterior.

Ahora, al hacer clic en el botón, solo se ejecutará el último manejador de eventos asignado, que es el que muestra la alerta "2". 

La instrucción removeEventListener no afectará a la función de alerta "1" que fue agregada con addEventListener porque las funciones proporcionadas no son idénticas.

Por lo tanto, al hacer clic en el botón, se mostrará la alerta "2".*/