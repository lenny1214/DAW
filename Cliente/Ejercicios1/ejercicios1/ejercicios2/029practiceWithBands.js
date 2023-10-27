"use strict";


/*029practiceWithBands.js/.html: Ejecuta sobre el siguiente array las 
operaciones pedidas:
 var grupos = [
    {nombre: "ACDC", genero: "Rock"},
    {nombre: "Cold Play", genero: "Pop"},
    {nombre: "NCT Dream", genero: "K-Pop"},
    {nombre: "Metallica", genero: "Heavy Metal"}
];

//filtra los grupos por género obtenido aquellos que son de Heavy Metal.
//Busca en los grupos usando “find” el grupo con Nombre “Cold Play”.
//¿En qué posición del array se encuenta “Cold Play”?
*/




let grupos = [
    {nombre: "ACDC", genero: "Rock"},
    {nombre: "Metallica", genero: "Pop"},
    {nombre: "Cold Play", genero: "K-Pop"},
    {nombre: "Metallica", genero: "Heavy Metal"}
];




let gruposHM=grupos.filter(grupo=>grupo.genero==="Heavy Metal");
console.log(gruposHM);






//Busca en los grupos usando “find” el grupo con Nombre “Cold Play”.


let grupoBuscar=grupos.find(grupo=>grupo.nombre==="Cold Play");


if(grupoBuscar){
    console.log("Grupo encontrado:" , grupoBuscar);
}else{
    console.log("El grupo no ha sido encontrado");
}


//¿En qué posición del array se encuenta “Cold Play”?




let posicionCP=grupos.findIndex(grupo=>grupo.nombre==="Cold Play");
 
if (posicionCP !==0){
    console.log("La posición de Cold PLay en el array es: " ,posicionCP);
}else{
    console.log("Cold Play no se encuentra en nuestro array");
}






































