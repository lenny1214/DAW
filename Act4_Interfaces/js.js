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

    //Función val implementada
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

    
    $("#imagen1").hover (
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

$(document).ready(function () {
    // ... (Tu código existente)

    // Agregar evento click al botón de enviar
    $("#enviarBtn").click(function () {
        enviarFormulario();
    });
});

function enviarFormulario() {
    // Limpiar errores antes de enviar
    limpiarErrores();

    // Validar campos antes de enviar
    if (!camposObligatoriosCompletos()) {
        return;
    }

    // Obtener datos del formulario
    let formData = $("#contactForm").serialize();

    // Enviar datos al servidor mediante AJAX
    $.ajax({
        url: "procesar_formulario.php",
        type: "POST",
        data: formData,
        success: function (response) {
            // Mostrar el mensaje recibido
            $("#mensajeRecibido").html(response);

            // Limpiar los datos del formulario
            $("#contactForm")[0].reset();

            // Ocultar el formulario con un efecto de deslizamiento
            $("#contactForm").slideUp("slow", function () {
                // Acciones a realizar después de ocultar el formulario (si es necesario)
            });
        },
        error: function (error) {
            // Manejar errores
            console.error("Error en la solicitud AJAX: ", error);

            // Mostrar mensaje de error al usuario
            alert("Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo.");
        }
    });
}

$(document).ready(function () {
    // Ocultar el formulario al principio
    $("#contactForm").hide();

    // Mostrar gradualmente el formulario cuando la página se carga
    $("#contactForm").slideDown(1000); // Puedes ajustar la duración según tu preferencia

    // Agregar evento click a los botones del acordeón
    $(".card-header button").click(function () {
       

        // Cerrar todos los demás elementos del acordeón
        $(".collapse").not(collapseElement).slideUp();

        // Abrir o cerrar el elemento clickeado
        collapseElement.slideToggle();

        // Marcar el botón como activo o inactivo
        $(".card-header button").not(this).addClass("collapsed");
        $(this).toggleClass("collapsed");
    });
});

$(document).ready(function () {
    // ... Tu código existente

    // Agregar eventos focusin y focusout al campo de nombre
    $("#nombre").focusin(function () {
        resaltarCampo("#nombre");
    });

    $("#nombre").focusout(function () {
        quitarResaltadoCampo("#nombre");
    });

    // Agregar eventos focusin y focusout al campo de apellido
    $("#apellido").focusin(function () {
        resaltarCampo("#apellido");
    });

    $("#apellido").focusout(function () {
        quitarResaltadoCampo("#apellido");
    });

    $("#email").focusin(function () {
        resaltarCampo("#email");
    });

    $("#email").focusout(function () {
        quitarResaltadoCampo("#email");
    });


    $("#asunto").focusin(function () {
        resaltarCampo("#asunto");
    });

    $("#asunto").focusout(function () {
        quitarResaltadoCampo("#asunto");
    });


    $("#comentario").focusin(function () {
        resaltarCampo("#comentario");
    });

    $("#comentario").focusout(function () {
        quitarResaltadoCampo("#comentario");
    });


    $("#suma").focusin(function () {
        resaltarCampo("#num1");
    });

    $("#suma").focusout(function () {
        quitarResaltadoCampo("#num1");
    });


    // Agregar evento click al botón de enviar
    $("#enviarBtn").click(function () {
        enviarFormulario();
    });
});

function resaltarCampo(elemento) {
    // Agregar una clase de resaltado solo al campo enfocado
    $(elemento).addClass("campo-resaltado");
}

function quitarResaltadoCampo(elemento) {
    // Eliminar la clase de resaltado solo del campo que perdió el enfoque
    $(elemento).removeClass("campo-resaltado");
}
$(document).ready(function () {
    // Agregar efecto de fadeIn a los bloques de enlaces
    $(".bloque-enlaces").fadeIn(1000);

    // Agregar evento click a los enlaces internos con efecto de desplazamiento suave
    $("#enlaces").click(function (event) {
        // Prevenir el comportamiento predeterminado del enlace
        event.preventDefault();

        // Obtener el destino del enlace
        let targetSection = $(this).attr("href");

        // Animar el scroll hacia la sección correspondiente con una duración de 1000ms
        $("html, body").animate({
            scrollTop: $(targetSection).offset().top
        }, 1000);

        // Puedes agregar una animación adicional al elemento destino si lo deseas
        // Por ejemplo, cambiar su color de fondo durante la animación
        $(targetSection).animate({ backgroundColor: "#ffffcc" }, 500).animate({ backgroundColor: "#fafafa" }, 500);
    });


});

$(document).ready(function () {

    // Agregar un controlador de eventos al cambio de tamaño de la ventana
    $(window).resize(function () {
        // Realizar acciones específicas cuando cambia el tamaño de la ventana
        console.log("La ventana ha cambiado de tamaño");

    });
});



$(document).ready(function () {
    // Establecer varios atributos de la imagen con id "imagen1"
    $("#imagen1").attr({
        "alt": "Nueva descripción de la imagen",
        "title": "Imagen mejorada"
    });
});

