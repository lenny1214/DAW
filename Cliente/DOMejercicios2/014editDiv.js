"use strict"

// editableDiv.js
function makeEditable() {
    const editableDiv = document.getElementById("editableDiv");
    const editableTextarea = document.getElementById("editableTextarea");
  
    editableTextarea.value = editableDiv.innerHTML;
    editableDiv.style.display = "none";
    editableTextarea.style.display = "block";
  
    editableTextarea.focus();
  
    // Detecta la tecla "Enter" para hacer el textarea no editable
    editableTextarea.addEventListener("keydown", function(event) {
      if (event.key === "Enter") {
        makeNonEditable();
      }
    });
  }
  
  function makeNonEditable() {
    const editableDiv = document.getElementById("editableDiv");
    const editableTextarea = document.getElementById("editableTextarea");
  
    editableDiv.innerHTML = editableTextarea.value;
    editableDiv.style.display = "block";
    editableTextarea.style.display = "none";
  }
  