"use strict";

/*025usingArrayDisney.js/.html: Ejecuta sobre el siguiente array las 
operaciones pedidas:
 let disney = [
    { nombre: "Hércules", pelicula: "Hércules" },
    { nombre: "Megana", pelicula: "Hércules" },
    { nombre: "Hades", pelicula: "Hércules" },
    { nombre: "Campanilla", pelicula: "Peter Pan" },
    { nombre: "Wendy", pelicula: "Peter Pan" }
];

//Meter a Peter Pan al final del array disney.
//Pintar el array
//Meter a El capitán Garfio al principio del array, no olvides la película
//Meter al cocodrilo detrás del capitán, no olvides la película
//Obtener los personajes de la película de "Peter Pan"; y mostrarlos uno 
a uno.
//Encontrar el índice de Campanilla.
//Buscar al cocodrilo.
//Escribe la función shuffle(array) que baraje (reordene de forma aleatoria) 
los elementos del array.
*/


let disney = [
    { nombre: "Hércules", pelicula: "Hércules" },
    { nombre: "Megana", pelicula: "Hércules" },
    { nombre: "Hades", pelicula: "Hércules" },
    { nombre: "Campanilla", pelicula: "Peter Pan" },
    { nombre: "Wendy", pelicula: "Peter Pan" }
];


//Meter a Peter Pan al final del array disney.

disney.push({ nombre: "Peter Pan", pelicula: "Peter Pan"});

alert (disney);

//Pintar el array

console.log(disney);


//Meter a El capitán Garfio al principio del array, no olvides la película
disney.unshift({nombre:"El capitan Garfio", pelicula:"Peter Pan"});
alert (disney);

//Obtener los personajes de la película de "Peter Pan"; y mostrarlos uno a uno

for(let i=0;i<disney.length;i<maxlength){
    let cons=disney[i];
   if(cons==="Peter Pan"){
    alert(cons.nombre);

    }

}

//Encontrar el índice de Campanilla.
let campanilla;
campanilla=disney.findIndexOf(function(value)
    {return value.nombre==campanilla
});

















