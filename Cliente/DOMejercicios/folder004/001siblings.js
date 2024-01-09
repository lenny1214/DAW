"use strict"

document.addEventListener("DOMContentLoaded", function () {
    // Selecciona el elemento con id "miElemento"
    var elem = document.getElementById("miElemento");

    // Verifica si elem.lastChild.nextSibling siempre es null
    console.log("¿Es cierto que elem.lastChild.nextSibling siempre es null?");
    console.log("Resultado:", elem.lastChild.nextSibling === null);

    // Verifica si elem.children[0].previousSibling siempre es null
    console.log("\n¿Es cierto que elem.children[0].previousSibling siempre es null?");
    console.log("Resultado:", elem.children[0].previousSibling === null);
});

//El primer resultado es verdadero ya que no sería null por que el último hijo (<div>) tiene un hermano siguiente (<span>).

//En el siguiente caso, es falso ya que no hay un elemento previo