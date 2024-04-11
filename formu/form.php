<html>
<head>
<meta charset="utf-8">
<title>Formulario de Registro SCIII</title>
<link href="estilForm.css" rel="stylesheet" type="text/css">
</head>
 
<body>
<div class="group">
  <form action="registro.php" method="POST">
  <h2><em>Formulario de Registro</em></h2>  
     
      <label for="nombre de Producto">Nombre de Product<span><em>(requerido)</em></span></label>
      <input type="text" name="nombrePro" class="form-input" required/>   
      
      <label for="Pais Procedencia">Pais de Procedencia <span><em>(requerido)</em></span></label>
      <input type="text" name="proce" class="form-input" required/>         
      
      <label for="precio">Precio <span><em>(requerido)</em></span></label>
      <input type="text" name="precio" class="form-input" />
     <center> <input class="form-btn" name="submit" type="submit" value="registrar" disabled="false"/></center>
    </p>
  </form>
</div>
</body>
</html>