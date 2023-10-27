"use strict";


/*033showEruropeanWeekDay.js/.html: En los países europeos se cuentan 
los días de la semana a partir del lunes (número 1), seguido del martes 
(número 2), hasta el domingo (número 7). Escribe una función getLocalDay(date)
 que devuelva el día de la semana “europeo” para la variable date.
  let date = new Date(2012, 0, 3);  // 3 Jan 2012
alert( getLocalDay(date) ); // tuesday, should show 2
Una vez lo obtengas, tradúcelo a español.
*/




function getLocalDay(date) {
    // Obtener el día de la semana en formato europeo (1 para lunes, 2 para martes, ..., 7 para domingo)
    let europeanDay = date.getDay();
  
    // Traducir al español
    switch (europeanDay) {
      case 1:
        return "lunes";
      case 2:
        return "martes";
      case 3:
        return "miércoles";
      case 4:
        return "jueves";
      case 5:
        return "viernes";
      case 6:
        return "sábado";
      case 0:
        return "domingo";
    }
  }
  
  let date = new Date(2012, 0, 3);  // 3 Jan 2012
  alert(getLocalDay(date)); // Debería mostrar "martes"
  