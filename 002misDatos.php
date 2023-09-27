/*Escribe un programa que almacene en variables tu nombre, 
primer apellido, segundo apellido, email, año en el que naciste y móvil. 
Luego muéstralos por pantalla dentro de una tabla*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>002misDatos</title>
</head>
<body>
<?php

$nombre="Lenny";
$apellido1="Fernández";
$apellido2="Vigil-Escalera";
$email="fernandezignacio0000@gmail.com";
$anoNacimiento=2000;
$movil="647323232";

?>

<table border="1">
        <tr>
            <th>Nombre</th>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <th>Primer Apellido</th>
            <td><?php echo $apellido1; ?></td>
        </tr>
        <tr>
            <th>Segundo Apellido</th>
            <td><?php echo $apellido2; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Año de Nacimiento</th>
            <td><?php echo $anoNacimiento; ?></td>
        </tr>
        <tr>
            <th>Móvil</th>
            <td><?php echo $movil; ?></td>
        </tr>
    </table>




</body>
</html>

















