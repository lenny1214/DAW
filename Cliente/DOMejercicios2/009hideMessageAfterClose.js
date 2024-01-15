"use strict";

document.addEventListener("DOMContentLoaded", function() {
  // Obtén la lista de mensajes
  const messageList = document.getElementById("messageList");

  // Agrega el botón de cierre a cada mensaje
  const messages = document.querySelectorAll(".message");
  messages.forEach(message => {
    const closeButton = document.createElement("span");
    closeButton.innerHTML = "X";
    closeButton.className = "closeButton";
    closeButton.addEventListener("click", function() {
      // Oculta el mensaje cuando se hace clic en el botón de cierre
      message.style.display = "none";
    });

    // Agrega el botón de cierre al mensaje
    message.appendChild(closeButton);
  });
});
