"use strict"

document.addEventListener("DOMContentLoaded", function() {
    // Tu código aquí
    let contenedor = document.getElementById("contenedor");
    let hijos = contenedor.children;

    for (let i = 0; i < hijos.length; i++) {
        console.log(hijos[i]);
    }
});


/*002-Usando firstChild, selecciona y muestra en la consola el
primer hijo del div con id contenedor.*/

document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento con id "contenedor"
    let contenedor = document.getElementById("contenedor");

    // Comprobar si hay un primer hijo antes de intentar acceder a sus propiedades
    if (contenedor && contenedor.firstElementChild) {
        // Obtener y mostrar el primer hijo (elemento HTML)
        let primerHijo = contenedor.firstElementChild;
        console.log(primerHijo);
    } else {
        console.log("El elemento contenedor no existe o no tiene hijos.");
    }
});


/*003- Usando lastChild, selecciona y muestra en la consola 
el último hijo del div con id contenedor.*/

document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento con id "contenedor"
    let contenedor = document.getElementById("contenedor");

    // Comprobar si hay un último hijo antes de intentar acceder a sus propiedades
    if (contenedor && contenedor.lastElementChild) {
        // Obtener y mostrar el último hijo (elemento HTML)
        let ultimoHijo = contenedor.lastElementChild;
        console.log(ultimoHijo);
    } else {
        console.log("El elemento contenedor no existe o no tiene hijos.");
    }
});




/*004- Usando parentElement, selecciona y muestra en la consola
el elemento padre del h1.*/

document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento h1
    let tituloPrincipal = document.querySelector("h1");

    // Comprobar si el elemento h1 existe
    if (tituloPrincipal) {
        // Obtener y mostrar el elemento padre del h1
        let elementoPadre = tituloPrincipal.parentElement;
        
        if (elementoPadre) {
            console.log(elementoPadre);
        } else {
            console.log("El h1 no tiene un elemento padre.");
        }
    } else {
        console.log("No se encontró el elemento h1 en el documento.");
    }
});




/*005- Usando children, selecciona y muestra en la consola todos los elementos 
hijos de la lista desordenada (ul).*/

document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento ul
    let listaDesordenada = document.querySelector("ul");

    // Comprobar si el elemento ul existe
    if (listaDesordenada) {
        // Obtener y mostrar todos los elementos hijos de la lista desordenada
        let elementosHijos = listaDesordenada.children;
        
        if (elementosHijos.length > 0) {
            console.log(elementosHijos);
        } else {
            console.log("La lista desordenada no tiene elementos hijos.");
        }
    } else {
        console.log("No se encontró el elemento ul en el documento.");
    }
});



/*006- Usando firstElementChild, selecciona y muestra en la consola el primer 
elemento hijo del div con id contenedor.*/

document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento con id "contenedor"
    let contenedor = document.getElementById("contenedor");

    // Comprobar si el elemento contenedor existe
    if (contenedor) {
        // Obtener y mostrar el primer elemento hijo del contenedor
        let primerElementoHijo = contenedor.firstElementChild;
        
        if (primerElementoHijo) {
            console.log(primerElementoHijo);
        } else {
            console.log("El contenedor no tiene elementos hijos.");
        }
    } else {
        console.log("No se encontró el elemento contenedor en el documento.");
    }
});








/*007- Usando lastElementChild, selecciona y muestra en la consola el último 
elemento hijo del div con id contenedor.*/


document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento con id "contenedor"
    let contenedor = document.getElementById("contenedor");

    // Comprobar si el elemento contenedor existe
    if (contenedor) {
        // Obtener y mostrar el último elemento hijo del contenedor
        let ultimoElementoHijo = contenedor.lastElementChild;

        if (ultimoElementoHijo) {
            console.log(ultimoElementoHijo);
        } else {
            console.log("El contenedor no tiene elementos hijos.");
        }
    } else {
        console.log("No se encontró el elemento contenedor en el documento.");
    }
});



/*008 -Usando previousElementSibling, selecciona y muestra en la consola el 
elemento anterior al párrafo con clase parrafo.*/

document.addEventListener("DOMContentLoaded", function() {
    // Obtener el párrafo con clase "parrafo"
    let parrafo = document.querySelector(".parrafo");

    // Comprobar si el párrafo existe
    if (parrafo) {
        // Obtener y mostrar el elemento anterior al párrafo
        let elementoAnterior = parrafo.previousElementSibling;

        if (elementoAnterior) {
            console.log(elementoAnterior);
        } else {
            console.log("No hay elementos anteriores al párrafo con clase 'parrafo'.");
        }
    } else {
        console.log("No se encontró el párrafo con clase 'parrafo' en el documento.");
    }
});






/*009 - Usando nextElementSibling, selecciona y muestra en la consola el 
elemento siguiente al párrafo con clase parrafo.*/

document.addEventListener("DOMContentLoaded", function() {
    // Obtener el párrafo con clase "parrafo"
    let parrafo = document.querySelector(".parrafo");

    // Comprobar si el párrafo existe
    if (parrafo) {
        // Obtener y mostrar el elemento siguiente al párrafo
        let elementoSiguiente = parrafo.nextElementSibling;

        if (elementoSiguiente) {
            console.log(elementoSiguiente);
        } else {
            console.log("No hay elementos siguientes al párrafo con clase 'parrafo'.");
        }
    } else {
        console.log("No se encontró el párrafo con clase 'parrafo' en el documento.");
    }
});



/*010- Usando JavaScript, selecciona el primer elemento li dentro de la
lista y muestra en la consola su nodeType, nodeName y tagName.*/


document.addEventListener("DOMContentLoaded", function() {
    // Obtener el primer elemento li dentro de la lista
    let primerLi = document.querySelector("ul li");

    // Comprobar si el elemento li existe
    if (primerLi) {
        // Mostrar en la consola las propiedades
        console.log("nodeType:", primerLi.nodeType);
        console.log("nodeName:", primerLi.nodeName);
        console.log("tagName:", primerLi.tagName);
    } else {
        console.log("No se encontró el primer elemento li dentro de la lista.");
    }
});




/*011- Usando JavaScript, selecciona el enlace (<a>) y muestra en la
consola su innerHTML y outerHTML.*/

document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento enlace (<a>)
    let enlace = document.querySelector("a");

    // Comprobar si el elemento enlace existe
    if (enlace) {
        // Mostrar en la consola el innerHTML y outerHTML
        console.log("innerHTML:", enlace.innerHTML);
        console.log("outerHTML:", enlace.outerHTML);
    } else {
        console.log("No se encontró el elemento enlace (<a>).");
    }
});




/*012 -Usando JavaScript, selecciona el párrafo con clase parrafo y
muestra en la consola su nodeValue y textContent.*/


document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento párrafo con clase "parrafo"
    let parrafo = document.querySelector(".parrafo");

    // Comprobar si el elemento párrafo existe
    if (parrafo) {
        // Mostrar en la consola el nodeValue y textContent
        console.log("nodeValue:", parrafo.nodeValue);
        console.log("textContent:", parrafo.textContent);
    } else {
        console.log("No se encontró el elemento párrafo con clase 'parrafo'.");
    }
});





/*013- Usando JavaScript, selecciona el div con id contenedor y verifica si 
tiene el atributo hidden. Si lo tiene, imprime en la consola "El 
elemento está oculto", de lo contrario, imprime "El elemento no está oculto".*/

document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento div con id "contenedor"
    let contenedor = document.getElementById("contenedor");

    // Verificar si el atributo hidden está presente
    if (contenedor && contenedor.hasAttribute("hidden")) {
        console.log("El elemento está oculto");
    } else {
        console.log("El elemento no está oculto");
    }
});









