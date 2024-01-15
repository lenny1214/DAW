"use strict"

function runOnKeys(func, ...keyCodes) {
    const pressedKeys = new Set();

    window.addEventListener('keydown', function(event) {
      pressedKeys.add(event.code);

      // Verifica si todas las teclas están presionadas
      const allKeysPressed = keyCodes.every(code => pressedKeys.has(code));

      if (allKeysPressed) {
        func();
      }
    });

    window.addEventListener('keyup', function(event) {
      pressedKeys.delete(event.code);
    });
  }

  // Ejemplo de uso
  runOnKeys(
    () => alert("¡Hola!"),
    "KeyQ",
    "KeyW"
  );