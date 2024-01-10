let intervalId;

function updateDigitalClock() {
  const now = new Date();
  const hours = now.getHours().toString().padStart(2, '0');
  const minutes = now.getMinutes().toString().padStart(2, '0');
  const seconds = now.getSeconds().toString().padStart(2, '0');

  const digitalClockElement = document.getElementById('digitalClock');
  digitalClockElement.textContent = `${hours}:${minutes}:${seconds}`;
}

function startClock() {
  // Actualizar el reloj cada segundo
  intervalId = setInterval(updateDigitalClock, 1000);

  // Inicializar el reloj al iniciar
  updateDigitalClock();
}

function stopClock() {
  // Detener el intervalo al parar
  clearInterval(intervalId);
}
