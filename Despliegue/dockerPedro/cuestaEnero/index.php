<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página PHP</title>

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />


    <link rel="stylesheet" type="text/css" href="styles.css">


    </head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Realizar Operaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <img src="../cuestaEnero/img/matematicas1.png" class="d-block w-100" alt="Matemáticas 1">
    </div>

   
<div class="container mt-5">
        <h2>Calculadora</h2>
        <form id="formOperaciones">
            <div class="mb-3">
                <label for="numero1" class="form-label">Número 1:</label>
                <input type="number" class="form-control" id="numero1" name="numero1" required>
            </div>
            <div class="mb-3">
                <label for="numero2" class="form-label">Número 2:</label>
                <input type="number" class="form-control" id="numero2" name="numero2" required>
            </div>
            <div class="mb-3">
                <label for="operacion" class="form-label">Operación:</label>
                <select class="form-select" id="operacion" name="operacion" required>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                    <option value="division">División</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="realizarOperacion()">Calcular</button>
        </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <!-- Script para calcular la suma y mostrar en un alert -->
    <script>
        function realizarOperacion() {
            var numero1 = document.getElementById('numero1').value;
            var numero2 = document.getElementById('numero2').value;
            var operacion = document.getElementById('operacion').value;

            var resultado;
            switch (operacion) {
                case 'suma':
                    resultado = parseFloat(numero1) + parseFloat(numero2);
                    break;
                case 'resta':
                    resultado = parseFloat(numero1) - parseFloat(numero2);
                    break;
                case 'multiplicacion':
                    resultado = parseFloat(numero1) * parseFloat(numero2);
                    break;
                case 'division':
                    resultado = parseFloat(numero1) / parseFloat(numero2);
                    break;
                default:
                    resultado = 'Operación no válida';
            }

            // Mostrar el resultado en un alert
            alert('El resultado es: ' + resultado);
        }
    </script>
</body>

</html>
