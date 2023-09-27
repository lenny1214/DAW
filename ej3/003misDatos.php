
<?php

$nombre=$_GET["nombre"];
$apellido1=$_GET["apellido1"];
$apellido2=$_GET["apellido2"];
$email=$_GET["email"];
$anoNac=$_GET["anoNac"];
$movil=$_GET["movil"];


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
            <td><?php echo $anoNac; ?></td>
        </tr>
        <tr>
            <th>Móvil</th>
            <td><?php echo $movil; ?></td>
        </tr>
    </table>









