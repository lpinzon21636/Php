<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $usuarios = [
        'Laura' => '4567',
        'Daniela' => '1234',
        'Natalia' => '9632'
    ];

 if (isset ($usuarios[$_POST['usuario']])){
     if ($uduarios[$_POST['usuario']] == $_POST['contrasena']){
         session_start();
         
         
        echO "<h2> <center> Usuarios activos </center></h2>";
                  
        echO "<h3> Usuarios por defecto: </h3>";
         
        print_r ($usuarios);
}

?>



</body>
</html>
