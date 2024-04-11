<?php 
    session_start();
    

    if(isset($_SESSION['u_usuario'])){
       //header("location:index2.php"); es mi pagina actual no se debe redireccionar
        //echo"sesion exitosa\n Bienvenido";
        //echo "<a href='cerrar_sesion.php'>Cerrar Sesion</a>";
    
    }
    else{
        header("location:index.php");
    }
    
    
    ?>





<!DOCTYPE html>
<html lang="es">
<head>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="estiloSubMenuCATEG.css">
        <style>
                .bg-propio{
                    background-image: url("img/telcel2.jpg");
                
                    padding-top:150px;
                    padding-bottom: 10px;
                    color:blue;
                    text-align:center;
                    font-weight:800;
                    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                    font-size: 20px;
                }
                </style>



    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>categorias</title>
</head>

<!-- Google Fuentes  roboto letra para articulos,pagina de tienda,etc..........-->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    
<!-- Font incre -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- personalizad CSS -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/responsive.css">


<body>
        <div class="bg-propio">

                <h1><strong>BIENVENIDOS A MI SITIO WEB DE COMPRA EN LINEA DE CELULARES</strong></h1> 
        </div>


        <div class="mainmenu-area">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div> 
                        <div>
                        <div class="navbar-collapse collapse">
                            
                            <ul class="nav navbar-nav">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="index2.php">Pagina de tienda</a></li>        <!-- mi  shop.html  -->
                                <li><a href="single-product.php">Articulos</a></li>
                                
    
                                <li class="active"><a href="categorias.php">Categorias</a> 
                                   <ul>
                                       <li><a href="formu/form.php">Televisores</a></li>
                                       <li><a href="formu/form.php">Celulares</a>
                                             <ul>
                                                 <li> <a href="formu/form.php">samsung</a></li>
                                                 <li> <a href="formu/form.php">huawei</a></li>
                                                 <li> <a href="formu/form.php">lg</a></li>
                                                <li> <a href="formu/form.php">sony</a></li>
                                                    
                                             </ul>
                                    
                                        
                                    
                                        </li>
                                       <li><a href="formu/form.php">Tablets</a></li>
                                       <li><a href="formu/form.php">Accesorios</a></li>
                                       <li><a href="formu/form.php">computadoras</a></li>
                                   </ul>
                                </li>
                                

                                    
                            <li><a href="#">Otros</a></li>
        
                            </ul>
                        </div>  
                    </div>
                </div>
            </div> <!-- fin mainmenu area -->




















            

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>
</html>