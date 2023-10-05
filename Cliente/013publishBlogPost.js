"use strict";

/*013publishBlogPost.js Escribe una función flecha que cree una publicación 
de blog. La función debe tomar un título y un contenido como argumentos 
obligatorios. También puede tomar una lista de etiquetas opcional.
Si no se proporcionan etiquetas, la publicación se creará sin ellas.*/





const crearBlog = (titulo, contenido, etiquetas) => { //Indicamos los parámetros que entran
    const publicacion = {
        titulo: titulo,
        contenido: contenido,
        etiquetas: etiquetas
    };
return publicacion;


};
//Creamos la primera publicación para el blog
const miPublicacion = crearBlog('La vida de Lenny', 'Mariwiwi', 'etiquetas');

console.log(miPublicacion);

//Para continuar añadiendo los etiquetas a la publicación
const otraPublicacion = crearPublicacionBlog('Otra Publicación', 'Contenido de otra publicación', ['etiqueta1', 'etiqueta2']);
console.log(otraPublicacion);



