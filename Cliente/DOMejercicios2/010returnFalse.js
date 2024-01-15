/*:¿Por qué en el código de abajo return false no funciona?
<script>
  function handler() {
    alert( "..." );
    return false;
  }
</script>
<a href="https://w3.org" onclick="handler()">el navegador irá a w3.org</a>

*/

/*No funciona ya que el enlace <a> tiene prioridad sobre el retorno falso de la
función handler. cuando el atributo está presente en un enlace,
el atributo anula el valor que devuelve la función del manejador*/
