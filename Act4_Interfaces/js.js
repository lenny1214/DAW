"use strict";
"use strict";

function generarSumaAleatoria() {
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;

    $("#sumaAleatoriaGenerada").text(`${num1} + ${num2}`);
    $("#num1").text(num1);
    $("#num2").text(num2);
}

function verificarSumaYEnviar() {

    const sumaGenerada = $("#sumaAleatoriaGenerada").text();
    const sumaIngresada = $("#sumaAleatoria").val();

    if (sumaIngresada.trim() !== sumaGenerada.replace(/\s+/g, '')) {
        mostrarError("#sumaAleatoria", "La suma ingresada es incorrecta.");
        return;
    }

    if (!$("#politicaPrivacidad").prop("checked")) {
        mostrarError("#politicaPrivacidad", "Debes aceptar la política de privacidad.");
        return;
    }

    $("#contactForm").submit();
    alert("Mensaje enviado con éxito");
}


$(document).ready(function () {
    $("#imagen1").hover(
        function () {
            $(this).attr("src", "../Act4_Interfaces/img/cambioimg1.jpg");
        },
        function () {
            $(this).attr("src", "../Act4_Interfaces/img/img1.jpg");
        }
    );

    $("#imagen2").hover(
        function () {
            $(this).attr("src", "../Act4_Interfaces/img/cambioimg2.jpg");
        },
        function () {
            $(this).attr("src", "../Act4_Interfaces/img/img2.jpg");
        }
    );

    $("#imagen3").hover(
        function () {
            $(this).attr("src", "../Act4_Interfaces/img/cambioimg3.jpg");
        },
        function () {
            $(this).attr("src", "../Act4_Interfaces/img/img3.jpg");
        }
    );
});

$(document).ready(function () {
    // ... tu código existente

    // Llamar a la función para generar la suma aleatoria
    generarSumaAleatoria();
});
