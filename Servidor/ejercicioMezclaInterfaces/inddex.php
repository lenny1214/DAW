<?php
include_once ("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barquitos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
    <nav>
        <ul>
            <li><a href="#Inicio">Inicio</a></li>
            <li><a href="#Barcos">Barcos</a></li>
            <li><a href="#Contacto">Contacto</a></li>
            <li><a href="#Nosotros">Sobre nosotros</a></li>
        </ul>
    </nav>

    <section>
    <div id="Inicio">
        <h1>Bienvenido a nuestra página de inicio</h1>
        <p>¡Aquí puedes encontrar información sobre nuestros barcos y servicios!</p>
        <img src="img/images.png" alt="Mi gente estamo en japon">
    </div>

    <div id="Barcos">
    </div>

    <div id="Contacto">
    </div>

    <div id="Nosotros">
    </div>
</secton>
    </header>


  <section>
    <div id="inicio">
        <h1>Inicio</h1>
        <p>Esto es texto de barcos</p>
        <img src = "img/images.png" alt="foto2">
      </section>

      <section>
      <?php
    include_once ("consultas.php");

    
    mostrarC2($resultado2);

    ?>

    </section>

    <section>

    <?php

    
    mostrarC3($resultado3);

    ?>
    </section>

 
    <section>

<?php


mostrarC4($resultado4);

?>
</section>


    









</body>
</html>
