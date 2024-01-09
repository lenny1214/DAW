"use strict"




/*001 - Usando JavaScript, selecciona el enlace (<a>) y verifica si tiene el 
atributo target. Si lo tiene, imprime en la consola su valor, de lo contrario, 
imprime "El atributo target no está presente".*/



document.addEventListener("DOMContentLoaded", function () {
    // Selecciona el enlace
    let enlace = document.querySelector("#contenedor a");

    // Verifica si el enlace tiene el atributo target
    if (enlace && enlace.hasAttribute("target")) {
        // Imprime el valor del atributo target
        console.log("El valor del atributo target es: " + enlace.getAttribute("target"));
    } else {
        // Imprime un mensaje si el atributo target no está presente
        console.log("El atributo target no está presente.");
    }
});




/*002 - Usando JavaScript, selecciona el primer elemento li dentro de la lista
 y verifica si tiene el atributo data-tipo. Si lo tiene, imprime en la consola su valor,
 de lo contrario, imprime "El atributo data-tipo no está presente".*/


document.addEventListener("DOMContentLoaded", function () {
    // Selecciona el primer elemento li dentro de la lista
    let primerLi = document.querySelector("#contenedor ul li:first-child");

    // Verifica si el li tiene el atributo data-tipo
    if (primerLi && primerLi.hasAttribute("data-tipo")) {
        // Imprime el valor del atributo data-tipo
        console.log("El valor del atributo data-tipo es: " + primerLi.getAttribute("data-tipo"));
    } else {
        // Imprime un mensaje si el atributo data-tipo no está presente
        console.log("El atributo data-tipo no está presente.");
    }
});


/*003 - Usando JavaScript, selecciona el párrafo con clase parrafo y cambia 
su atributo data-tipo a "nuevo-parrafo". Luego, imprime en la consola el 
nuevo valor del atributo.*/

document.addEventListener("DOMContentLoaded", function () {
    // Selecciona el párrafo con la clase "parrafo"
    let parrafo = document.querySelector("#contenedor .parrafo");

    // Verifica si el párrafo existe y tiene el atributo data-tipo
    if (parrafo && parrafo.hasAttribute("data-tipo")) {
        // Cambia el valor del atributo data-tipo a "nuevo-parrafo"
        parrafo.setAttribute("data-tipo", "nuevo-parrafo");

        // Imprime en la consola el nuevo valor del atributo
        console.log("El nuevo valor del atributo data-tipo es: " + parrafo.getAttribute("data-tipo"));
    } else {
        console.log("El párrafo con la clase 'parrafo' o el atributo data-tipo no está presente.");
    }
});

/*004 - Usando JavaScript, selecciona el título (<h1>) y 
agrega un nuevo atributo llamado style con el valor color: blue;.*/


document.addEventListener("DOMContentLoaded", function () {
    // Selecciona el título (<h1>)
    let titulo = document.querySelector("#contenedor h1");

    // Verifica si el título existe
    if (titulo) {
        // Agrega el nuevo atributo style con el valor color: blue;
        titulo.setAttribute("style", "color: blue;");

        console.log("Se ha agregado el atributo style con el valor color: blue; al título.");
    } else {
        console.log("El título (<h1>) no está presente.");
    }
});


/*005 - Usando JavaScript, selecciona el primer elemento li y elimina su 
atributo data-tipo. Luego, imprime en la consola la lista de atributos restantes.*/


document.addEventListener("DOMContentLoaded", function () {
            // Selecciona el primer elemento li dentro de la lista
            let primerLi = document.querySelector("#contenedor ul li:first-child");

            // Verifica si el li existe y tiene el atributo data-tipo
            if (primerLi && primerLi.hasAttribute("data-tipo")) {
                // Elimina el atributo data-tipo
                primerLi.removeAttribute("data-tipo");

                // Imprime en la consola la lista de atributos restantes
                console.log("Atributos restantes del primer li:", primerLi.attributes);
            } else {
                console.log("El primer li o el atributo data-tipo no está presente.");
            }
        });




/*006 - Usando JavaScript, selecciona el enlace (<a>) y 
verifica si tiene algún atributo personalizado en el dataset. 
Si los tiene, imprime en la consola todos los atributos personalizados presentes.*/


document.addEventListener("DOMContentLoaded", function () {
    // Selecciona el enlace (<a>)
    let enlace = document.querySelector("#contenedor a");

    // Verifica si el enlace existe y tiene atributos personalizados en el dataset
    if (enlace && enlace.dataset) {
        // Imprime en la consola todos los atributos personalizados presentes
        console.log("Atributos personalizados en el dataset del enlace:");
        for (let key in enlace.dataset) {
            console.log(key + ": " + enlace.dataset[key]);
        }
    } else {
        console.log("El enlace (<a>) o los atributos personalizados en el dataset no están presentes.");
    }
});




