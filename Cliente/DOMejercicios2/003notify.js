function showWindow(options) {
    // Configuración predeterminada
    const defaultOptions = {
      top: 0,
      right: 0,
      html: "Default Window",
      className: ""
    };
  
    // Combinar las opciones proporcionadas con las predeterminadas
    const windowOptions = Object.assign({}, defaultOptions, options);
  
    // Crear el elemento de ventana
    const windowElement = document.createElement("div");
    windowElement.className = "showWindow " + windowOptions.className;
    windowElement.style.top = windowOptions.top + "px";
    windowElement.style.right = windowOptions.right + "px";
    windowElement.innerHTML = windowOptions.html;
  
    // Agregar la ventana al cuerpo del documento
    document.body.appendChild(windowElement);
  
    // Desaparecer después de 1.5 segundos
    setTimeout(() => {
      windowElement.remove();
    }, 1500);
  }
  
  // Ejemplo de uso
  showWindow({
    top: 10,
    right: 10,
    html: "Hello!",
    className: "welcome"
  });