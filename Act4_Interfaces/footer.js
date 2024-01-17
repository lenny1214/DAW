"use strict";
$(document).ready(function () {
    // Función para mostrar u ocultar el footer según el scroll
    function toggleFooter() {
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();

        // Muestra u oculta el footer cuando el scroll llega al final de la página
        if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
            $('footer').fadeIn();
        } else {
            $('footer').fadeOut();
        }
    }

    // Llama a la función al cargar la página
    toggleFooter();

    // Llama a la función cada vez que se realiza un scroll
    $(window).scroll(function () {
        toggleFooter();
    });
    // Mostrar gradualmente los enlaces del pie de página al cargar la página
    $(".bloque-enlaces a").fadeIn(1500); // Puedes ajustar la duración según tu preferencia
});

$(document).ready(function () {
    // Agregar efecto de fadeIn a los bloques de enlaces con animación para que se hagan más grandes los enlaces
    $(".bloque-enlaces").fadeIn(1000).animate({ fontSize: "20px" }, 1000);

});
