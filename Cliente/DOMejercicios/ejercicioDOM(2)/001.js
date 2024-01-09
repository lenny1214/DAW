"use strict"

/*001 - Usando JavaScript, agrega una nueva fila a la tabla con los 
siguientes datos: "Pedro", "28", "Colombia".*/

window.onload = function () {
    // Obtener la referencia de la tabla
    let tabla = document.getElementById("miTabla");

    // Crear una nueva fila
    let nuevaFila = tabla.insertRow();

    // Insertar celdas con los datos
    let nombre = nuevaFila.insertCell(0);
    let edad = nuevaFila.insertCell(1);
    let pais = nuevaFila.insertCell(2);

    // Asignar valores a las celdas
    nombre.innerHTML = "Pedro";
    edad.innerHTML = "28";
    pais.innerHTML = "Colombia";
};


/*002- Cambia el nombre de "Carlos" a "Juan" y actualiza su edad a "26".*/


window.onload = function() {
    // Busca la tabla por su ID
    var miTabla = document.getElementById("miTabla");

    // Obtén la fila que contiene "Carlos"
    var filaCarlos = null;
    for (var i = 0; i < miTabla.rows.length; i++) {
        if (miTabla.rows[i].cells[0].innerHTML === "Carlos") {
            filaCarlos = miTabla.rows[i];
            break;
        }
    }

    // Si se encontró la fila, actualiza el nombre y la edad
    if (filaCarlos) {
        filaCarlos.cells[0].innerHTML = "Juan";
        filaCarlos.cells[1].innerHTML = "26";
    }
};
































































































