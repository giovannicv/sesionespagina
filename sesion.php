<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesion</title>
</head>
<body>
    <?php 
    session_start();
    

    if(isset($_SESSION['u_usuario'])){
        header("location:index2.php");
        echo"sesion exitosa\n Bienvenido";
        echo "<a href='cerrar_sesion.php'>Cerrar Sesion</a>";
    
    }
    else{
        header("location:index.php");
    }
    
    
    ?>



</body>
</html>