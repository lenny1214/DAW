"use strict"

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

