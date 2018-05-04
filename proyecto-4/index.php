<?php include 'componentes/secciones.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="CSS/estilos.css" type="text/css">
    <title><?php
    echo $titulo;
    ?></title>
</head>
<body>
    <div class="container">
    
        <?php
        include 'componentes/header.php';
        ?>
        
        <?php 
        include 'componentes/nav.php';
        ?>
       

        <section>
         <h1>  <?php echo $titulo; ?></h1>
         <img src="<?php echo $imagen ?>">
         <p><?php echo $contenido ?></p>
         
        </section>

        <?php
        include 'componentes/footer.php';
         ?> 
        
    
    </div>
    
</body>
</html>