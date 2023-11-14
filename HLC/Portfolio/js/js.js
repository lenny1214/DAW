
"use strict"

function cambiarColor(fufa) {
    let miDiv = document.getElementById("glugla");
    miDiv.style.backgroundColor = fufa;
}

let estado= "red";

function onOff(){
    let botones = document.getElementById("botones")
    let onOff = document.getElementById("onOff");
    if (estado=="red") {
        estado = "green";
        onOff.style.backgroundColor = estado;
        cambiarColor("white");
        botones.style.display="flex";
    }else if (estado=="green"){
        estado = "red";
        onOff.style.backgroundColor = estado;
        cambiarColor("gray");
        botones.style.display="none";
    }
    
}

