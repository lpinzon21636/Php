<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        
        /** 
        * Creo de manera predeterminada tres usuarios con contraseñas 
        * para hacer la validacion de datos
        */    
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
         
        /** 
        * En la siguiente sentencia se usa el asort. Esto se utiliza 
        *principalmente para ordenar arrays asociativos cuando el orden de 
        *los elementos es importante.
        */         
        
       arsort($usuarios);
       echo "<h3>Lista descendente:</h3>";
       
       print_r($users);
         
        /** 
        * En la siguiente sentencia se usa el sort para arreglar de manera
        *ascendente o descendente un arreglo, en este caso sería el de los usuarios
        *que ya estan predeterminados 
        */       
        
        sort($usuarios);
        echo "<h3>Lista ascendente:</h3>";
        
        print_r($usuarios);
         
        /** 
        * En este caso se verifica la contraseña y se muestra si
        *los datos ingresados son incorrectos
        */       
   
     } else {
            echo 'Contraseña invalida';
            header('location:index.php');
         
        /** 
        *Se valida si los datos ingresados son correctos en tal caso de que no, se muestra
        *que los datos ingresados son incorrectos
        */    
         
       }
   } else {
        echo 'Datos invalidos';
        header('location:index.php');
    }
?>

</body>
</html>
