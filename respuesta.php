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

<?php
    if($_POST){
        $nombre = $_POST ['nombre'];
        $apellido = $_POST ['apellido'];
        $edad = $_POST ['edad'];
        echO "<br>";
        echO "$nombre $apellido $edad";
}

?>



</body>
</html>
