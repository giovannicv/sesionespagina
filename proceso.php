


<?php 

session_start();
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

include("conexion.php");//ver diferencia entre required y include
    

//el sigu codigo seleciona para toda la tabla usuarios que esta en la base de datos y 
// y verifica si contrasena y nombre usuario son iguales al ingresado
$proceso=$conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'");


if($resultado=mysqli_fetch_array($proceso)){
$_SESSION['u_usuario']=$usuario;
 header("location:index2.php");
 
 
}
else{
    
                 
   echo '<p>¡Usuario o contraseña incorrectos! </p><br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';  // 2 redirecciona a otra pagina del servidor mas un enlace volver a index
   // header("location:index.php");
    
}


?>