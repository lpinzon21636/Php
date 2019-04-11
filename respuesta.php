<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $pass = [
        'Laura' => '25648',
        'Daniela' => '334455',
    ];
<form action="012-php-post.php" method="POST" name="formulario">
    Introduce la edad: <input name="edad" type="number" /> 
    Introduce la fecha de nacimiento <input name="fechanac" type="date" />
    <input type="submit" value="Enviar" />
</form>

    if (isset($pass[$_GET['usser']])) {
        if ($pass[$_GET['usser']]== $_GET['pass']){
            session_start();

            echo "Sesión iniciada";
        } else {
            echo 'Contraseña incorrecta';
        }
    } else {
        echo 'datos incorrectos';
    }

    ?>



</body>
</html>
