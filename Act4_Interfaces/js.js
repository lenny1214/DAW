"use strict"

function inicializarMapa() {
    let ubicacion = { lat: 42.60003, lng: -5.57032 }; // Coordenadas de ejemplo
    let mapa = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: ubicacion
    });

    let marcador = new google.maps.Marker({
        position: ubicacion,
        map: mapa
    });
}

function validarFormulario() {
    let nombre = $("#nombre").val();
    let email = $("#email").val();
    let comentario = $("#comentario").val();

    // Validar campos obligatorios, utilizamos el (trim) para validar que el usuario no añade solo espacios en blanco
    if (nombre.trim() === "") {
        alert("Por favor, ingresa tu nombre.");
        return;
    }

    if (email.trim() === "") {
        alert("Por favor, ingresa tu correo electrónico.");
        return;
    }

    if (comentario.trim() === "") {
        alert("Por favor, ingresa un comentario.");
        return;
    }
    $("#contactForm").submit();
    alert("Mensaje enviado con éxito")

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
