<?php

if(isset($_COOKIE['contador']))

{

setcookie('contador', $_COOKIE['contador'] + 1, time() + 1);

$mensaje = 'Número de visitas: ' . $_COOKIE['contador'];

}

else

{

setcookie('contador', 1, time() + 1);

$mensaje = 'Bienvenido a nuestra página web';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    echo $mensaje;

?>

</body>
</html>