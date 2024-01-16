"use strict";



$(document).ready(function () {
    // Agregar evento click a los botones del acordeón
    $(".card-header button").click(function () {
        // Obtener el collapse asociado al botón clickeado
        let collapseId = $(this).data("target");
        let collapseElement = $(collapseId);

        // Cerrar todos los demás elementos del acordeón
        $(".collapse").not(collapseElement).slideUp();

        // Abrir o cerrar el elemento clickeado
        collapseElement.slideToggle();

        // Marcar el botón como activo o inactivo
        $(".card-header button").not(this).addClass("collapsed");
        $(this).toggleClass("collapsed");
    });
});


        function generarSumaAleatoria() {
            let num1 = Math.floor(Math.random() * 10) + 1;
            let num2 = Math.floor(Math.random() * 10) + 1;

            $("#num1").text(num1);
            $("#num2").text(num2);
        }

        function verificarSumaYEnviar() {
            limpiarErrores();

            if (!camposObligatoriosCompletos()) {
                return;
            }

            let sumaIngresada = parseInt($("#sumaAleatoria").val());

            if (!esSumaCorrecta(sumaIngresada)) {
                mostrarError("#sumaAleatoria", "La suma ingresada es incorrecta.");
                return;
            }

            $("#contactForm")[0].submit();
        }

        function camposObligatoriosCompletos() {
            let camposCompletos = true;

            $(".form-control[required]").each(function () {
                if ($(this).val().trim() === "") {
                    mostrarError(`#${$(this).attr("id")}`, "Este campo es obligatorio.");
                    camposCompletos = false;
                }
            });

            if (!$("#politicaPrivacidad").prop("checked")) {
                mostrarError("#politicaPrivacidad", "Debes aceptar la política de privacidad.");
                camposCompletos = false;
            }

            return camposCompletos;
        }

        function esSumaCorrecta(sumaIngresada) {
            const num1 = parseInt($("#num1").text());
            const num2 = parseInt($("#num2").text());
            const sumaGenerada = num1 + num2;

            return sumaIngresada === sumaGenerada;
        }

        function mostrarError(elemento, mensaje) {
            $(elemento).addClass("is-invalid");
            $(`${elemento}Error`).text(mensaje);
        }

        function limpiarErrores() {
            $(".form-control").removeClass("is-invalid");
            $("#sumaAleatoriaError, #politicaPrivacidadError").text("");
        }

        $(document).ready(function () {
            generarSumaAleatoria();

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
    // ... (Tu código existente)

    // Agregar evento keyup al campo de sumaAleatoria
    $("#sumaAleatoria").keyup(function () {
        verificarResultado();
    });

    // ... (Tu código existente)
});

function verificarResultado() {
    limpiarErrores();

    let sumaIngresada = parseInt($("#sumaAleatoria").val());

    if (!isNaN(sumaIngresada)) {
        if (esSumaCorrecta(sumaIngresada)) {
            mostrarIcono("fa-check", "green");
        } else {
            mostrarIcono("fa-times", "red");
        }
    } else {
        limpiarIcono();
    }
}

function mostrarIcono(iconClass, color) {
    // Eliminar el icono anterior si lo hay
    limpiarIcono();

    // Crear un nuevo elemento para el icono
    let iconElement = $(`<i class="fas ${iconClass}" style="color: ${color};"></i>`);

    // Agregar el icono al contenedor adecuado
    $("#sumaAleatoria").after(iconElement);
}

function limpiarIcono() {
    // Eliminar cualquier icono existente
    $("#sumaAleatoria").next("i").remove();
}