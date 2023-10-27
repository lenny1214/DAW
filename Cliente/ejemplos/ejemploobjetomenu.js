"use strict";

let lista=[
    {id:"5", name:"Lenny"},
    {id:"4", name:"Nico"},
    {id:"3", name:"Manu"},
    {id:"2", name:"Seida"},


];

let ul=document.getElementById("lista");

for (let i=0; i<lista.length;i++) {
let item=lista[i];
let li=document.createElement("li");
li.textContent = "ID:${item.id}, Nombre: ${item.name}";
ul.appendChild(li);
}

alert (lista);












































