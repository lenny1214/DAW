/*14. 014bola8.html: Prepara un formulario con una caja de texto que realice a
una pregunta al usuario. 014bola8.php: A partir del anterior, crea un
programa que muestre la pregunta recibida y genere una respuesta de
manera aleatoria entre un conjunto de respuestas predefinidas,
almacenadas en un array: Sí, no, quizás, claro que sí, por supuesto que no,
no lo tengo claro, seguro, yo diría que sí, ni de coña, etc...
Este ejercicio se basa en el juego de la Bola 8 mágica.*/



<?php
//Creamos el array de respuestas aleatorias
    $respuestas = array (
        "Sí",
        "No",
        "Quién sabe",
        "AAAAAAAA",
        "MaMaHueVo",
    );



    $pregunta = isset($_POST['pregunta'])? $_POST ['pregunta'] : ''; //Convertimos aquí una variable que vamos a coger del html que es la pregunta del usuario para verificar que no está vacía la variable y que nos muestre respuesta

    if (!empty($pregunta)){
        $respuestaAleatoria = $respuestas[array_rand($respuestas)];
        echo "<p><strong>Tu pregunta:</strong> $pregunta</p>";
        echo "<p><strong>La Bola 8 Mágica dice:</strong> $respuestaAleatoria</p>";
    } else {
        echo "<p>Por favor, haz una pregunta primero.</p>";
    }


?>


