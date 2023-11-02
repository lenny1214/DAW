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
        <section class="header-content">
            <h1>Bienvenido a Barquitos</h1>
            <p>Tu fuente confiable de información sobre barcos y batallas históricas.</p>
        </section>
    </header>


</body>
</html>


    <section>
        <div id="inicio">
            <h1>Inicio</h1>
            <p>Descubre la fascinante historia de los barcos de guerra.</p>
            <img src="img/images.png" alt="Barcos de guerra">
        </div>
    </section>

    <section>
        <h2>Encontrar aquellos países que dispongan tanto de acorazados como
de cruceros.</h2>
        <?php
        include_once("consultas.php");
        mostrarC2($resultado2);
        ?>
    </section>

    <section>
        <h2>Encontrar aquellas batallas en las cuales un mismo país participo con
al menos tres barcos.
</h2>
        <?php
        mostrarC3($resultado3);
        ?>
    </section>

    <section>
        <h2>Encontrar los países cuyos barcos tengan el mayor número de
cañones.</h2>
        <?php
        mostrarC4($resultado4);
        ?>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                
                <p>Barquitos es una empresa especializada en la historia y los barcos de guerra. Proporcionamos información detallada sobre los barcos y batallas más importantes a lo largo de la historia.</p>
            </div>
            <div class="footer-section contact">
                <h2>Contacto</h2>
                <p><i class="fas fa-envelope"></i> Correo: info@barquitos.com</p>
                <p><i class="fas fa-phone"></i> Teléfono: +123 456 789</p>
            </div>
            
        </div>
        <div class="footer-bottom">
            &copy; 2023 Barquitos | Desarrollado por Lenny
        </div>
    </footer>
</body>
</html>
