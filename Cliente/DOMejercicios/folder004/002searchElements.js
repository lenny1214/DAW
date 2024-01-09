"use strict"

document.addEventListener("DOMContentLoaded", function () {
    // Encuentra la tabla con id="age-table"
    let ageTable = document.getElementById("age-table");
    console.log("Tabla con id='age-table':", ageTable);

    // Encuentra todos los elementos label dentro de la tabla
    let labelsInTable = ageTable.querySelectorAll("label");
    console.log("Elementos label dentro de la tabla:", labelsInTable);

    // Encuentra el primer td en la tabla con la palabra "age"
    let firstTdWithAge = [...ageTable.querySelectorAll("td")].find(td => td.containsText("age"));
    console.log("Primer td en la tabla con la palabra 'age':", firstTdWithAge);

    // Encuentra el formulario con name="search"
    let searchForm = document.querySelector("form[name='search']");
    console.log("Formulario con name='search':", searchForm);

    // Encuentra el primer input en ese formulario
    let firstInputInForm = searchForm.querySelector("input");
    console.log("Primer input en el formulario:", firstInputInForm);

    // Encuentra el último input en ese formulario
    let inputsInForm = searchForm.querySelectorAll("input");
    let lastInputInForm = inputsInForm[inputsInForm.length - 1];
    console.log("Último input en el formulario:", lastInputInForm);
});

// Función de soporte para la búsqueda de texto en los nodos
// Se utiliza en la búsqueda del primer td con la palabra "age"
Node.prototype.containsText = function (text) {
    return this.innerText.includes(text);
};