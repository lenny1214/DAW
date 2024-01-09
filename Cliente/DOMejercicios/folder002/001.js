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
    let miTabla = document.getElementById("miTabla");

    // Obtén la fila que contiene "Carlos"
    let filaCarlos = null;
    for (let i = 0; i < miTabla.rows.length; i++) {
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


/*003 - Selecciona y muestra en la consola el nombre de la persona 
que tiene la edad más alta en la tabla.*/

document.addEventListener("DOMContentLoaded", function () {
    // Obtén la tabla
    let tabla = document.getElementById("miTabla");

    // Obtén todas las filas de la tabla, excluyendo la primera (encabezados)
    let filas = tabla.getElementsByTagName("tr");
    
    // Inicializa variables para el nombre y edad máximos
    let nombreMaxEdad = "";
    let edadMaxima = 0;

    // Recorre las filas para encontrar la persona con la edad más alta
    for (let i = 1; i < filas.length; i++) {
        let celdas = filas[i].getElementsByTagName("td");
        let nombre = celdas[0].textContent;
        let edad = parseInt(celdas[1].textContent);

        // Compara la edad actual con la máxima encontrada hasta ahora
        if (edad > edadMaxima) {
            edadMaxima = edad;
            nombreMaxEdad = nombre;
        }
    }

    // Muestra el nombre de la persona con la edad más alta en la consola
    console.log("La persona con la edad más alta es: " + nombreMaxEdad);
});





/*004 -Agrega una nueva columna al final de cada fila con el texto "Acción" y 
dentro de cada celda de esta columna agrega un botón con el texto "Eliminar".*/

document.addEventListener("DOMContentLoaded", function () {
    // Obtén la tabla
    let tabla = document.getElementById("miTabla");

    // Obtén todas las filas de la tabla, excluyendo la primera (encabezados)
    let filas = tabla.getElementsByTagName("tr");

    // Recorre las filas para agregar la columna "Acción" con botón "Eliminar"
    for (let i = 0; i < filas.length; i++) {
        // Agrega una nueva celda al final de cada fila
        let nuevaCelda = filas[i].insertCell(-1);

        // Agrega un botón "Eliminar" a la nueva celda
        let botonEliminar = document.createElement("button");
        botonEliminar.textContent = "Eliminar";
        botonEliminar.onclick = function () {
            eliminarFila(this);
        };

        nuevaCelda.appendChild(botonEliminar);
    }
});

// Función para eliminar la fila al hacer clic en el botón "Eliminar"
function eliminarFila(boton) {
    let fila = boton.parentNode.parentNode;
    fila.parentNode.removeChild(fila);
}























































































