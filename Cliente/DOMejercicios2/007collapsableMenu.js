"use strict"

document.addEventListener("DOMContentLoaded", function() {
    console.log("El script se ha ejecutado correctamente.");
  
    const toggleButton = document.getElementById("toggleButton");
    const menu = document.getElementById("menu");
  
    console.log("toggleButton:", toggleButton);
    console.log("menu:", menu);
  
    toggleButton.addEventListener("click", function() {
      console.log("Botón clicado");
  
      menu.classList.toggle("expanded");
      console.log("Clase 'expanded' añadida/eliminada");
    });
  });
  