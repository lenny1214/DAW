"use strict"


// Función para crear el calendario
function createCalendar(elem, year, month) {
    // Obtener la referencia del elemento contenedor
    let container = document.getElementById(elem);
  
    // Crear un nuevo objeto de fecha para el primer día del mes
    let firstDay = new Date(year, month - 1, 1);
  
    // Obtener el día de la semana del primer día del mes (0 = domingo, 1 = lunes, ..., 6 = sábado)
    let startingDay = firstDay.getDay();
  
    // Crear un array con los nombres de los días de la semana
    let weekdays = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];
  
    // Crear la tabla con Bootstrap
    let table = document.createElement('table');
    table.classList.add('table');
  
    // Crear la fila de encabezados con los nombres de los días de la semana
    let headerRow = document.createElement('tr');
    weekdays.forEach(function(day) {
      let th = document.createElement('th');
      th.textContent = day;
      headerRow.appendChild(th);
    });
    table.appendChild(headerRow);
  
    // Crear el cuerpo de la tabla con los días del mes
    let currentDate = 1;
    for (let i = 0; i < 6; i++) {
      let row = document.createElement('tr');
  
      for (let j = 0; j < 7; j++) {
        let cell = document.createElement('td');
        
        // Llenar la celda con el número del día si corresponde
        if (i === 0 && j < startingDay) {
          // Celdas vacías antes del primer día del mes
          cell.textContent = '';
        } else if (currentDate > getDaysInMonth(year, month)) {
          // Celdas vacías después del último día del mes
          cell.textContent = '';
        } else {
          // Llenar la celda con el número del día
          cell.textContent = currentDate;
          currentDate++;
        }
  
        row.appendChild(cell);
      }
  
      table.appendChild(row);
    }
  
    // Agregar la tabla al contenedor especificado
    container.appendChild(table);
  }
  
  // Función auxiliar para obtener el número de días en un mes
  function getDaysInMonth(year, month) {
    return new Date(year, month, 0).getDate();
  }
  
  // Llamar a la función createCalendar con el contenedor 'calendarioContainer' y el año y mes deseados
  createCalendar('calendarioContainer', 2024, 1);