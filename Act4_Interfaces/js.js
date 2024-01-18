"use strict";

$(document).ready(function () {
    // Acordeón
    $(".card-header button").click(function () {
        let collapseId = $(this).data("target");
        let collapseElement = $(collapseId);

        $(".collapse").not(collapseElement).slideUp();
        collapseElement.slideToggle();

        $(".card-header button").not(this).addClass("collapsed");
        $(this).toggleClass("collapsed");
    });

   

    // Validar suma mientras se escribe
    $("#sumaAleatoria").keyup(function () {
        verificarResultado();
    });

    // Mostrar gradualmente el formulario al cargar la página
    $("#contactForm").hide().slideDown(1000);

    // Eventos focusin y focusout para resaltar campos
    $("#nombre, #apellido, #email, #asunto, #comentario, #num1").on({
        focusin: function () {
            resaltarCampo($(this));
        },
        focusout: function () {
            quitarResaltadoCampo($(this));
        }
    });

    // Enviar formulario al hacer clic en el botón
    $("#enviarBtn").click(function () {
        enviarFormulario();
    });

    // Efecto fadeIn para bloques de enlaces
    $(".bloque-enlaces").fadeIn(1000);

    // Scroll suave al hacer clic en enlaces internos
    $("#enlaces").click(function (event) {
        event.preventDefault();

        let targetSection = $(this).attr("href");

        $("html, body").animate({
            scrollTop: $(targetSection).offset().top
        }, 1000);

        $(targetSection).animate({ backgroundColor: "#ffffcc" }, 500).animate({ backgroundColor: "#fafafa" }, 500);
    });

    // Controlador de eventos al cambio de tamaño de la ventana
    $(window).resize(function () {
        console.log("La ventana ha cambiado de tamaño");
    });

    // Establecer atributos de la imagen con id "imagen1"
    $("#imagen1").attr({
        "alt": "Nueva descripción de la imagen",
        "title": "Imagen mejorada"
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


    $("#contactForm")[0].submit(function(event){event.preventDefault()});
    
    limpiarErrores();

    if (!camposObligatoriosCompletos()) {
        return;
    }

    let formData = $("#contactForm").serialize();

    $.ajax({
        url: "procesaform.php",
        type: "POST",
        data: formData,
        success: function (response) {
            $("#mensajeRecibido").html(response);
            $("#contactForm")[0].reset();
            $("#contactForm").slideUp("slow", function () {
                // Acciones a realizar después de ocultar el formulario (si es necesario)
            });
        },
        error: function (error) {
            console.error("Error en la solicitud AJAX: ", error);
            alert("Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo.");
        }
    });
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
    limpiarIcono();

    let iconElement = $(`<i class="fas ${iconClass}" style="color: ${color};"></i>`);
    $("#sumaAleatoria").after(iconElement);
}

function limpiarIcono() {
    $("#sumaAleatoria").next("i").remove();
}






function resaltarCampo(elemento) {
    elemento.addClass("campo-resaltado");
}

function quitarResaltadoCampo(elemento) {
    elemento.removeClass("campo-resaltado");
}


function generarSumaAleatoria() {
    let num1 = Math.floor(Math.random() * 10) + 1;
    let num2 = Math.floor(Math.random() * 10) + 1;

    $("#num1").text(num1);
    $("#num2").text(num2);
}

// Llama a la función al cargar la página
$(document).ready(function () {
    generarSumaAleatoria();
});

// Llama a la función al hacer clic en el botón de enviar
$("#mensajeRecibido").click(function () {
    generarSumaAleatoria();
    verificarSumaYEnviar();
});

$("#miFooter").prepend('<div id="nuevoElemento" class="nuevo-elemento"><p>Este es el enlace para la gente Prime</p></div>');
