"use strict"
document.addEventListener("DOMContentLoaded", function() {
    const genresSelect = document.getElementById("genres");
  
    // Mostrar el valor y el texto del option seleccionado
    function mostrarSeleccion() {
      const selectedOption = genresSelect.options[genresSelect.selectedIndex];
      alert(`Valor seleccionado: ${selectedOption.value}\nTexto seleccionado: ${selectedOption.text}`);
    }
  
    // Añadir un option: <option value="classic">Classic</option>. Seleccionarlo.
    function addAndSelectOption() {
      const newOption = document.createElement("option");
      newOption.value = "classic";
      newOption.text = "Classic";
      genresSelect.add(newOption);
  
      // Seleccionar la nueva opción
      genresSelect.value = "classic";
  
      // Mostrar la opción seleccionada
      mostrarSeleccion();
    }
  
    // Asociar la función mostrarSeleccion al evento change del select
    genresSelect.addEventListener("change", mostrarSeleccion);
  
    // Añadir un option al cargar el documento
    addAndSelectOption();
  });
  