<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantas</title>
    <script src="js/glide.min.js"></script>
    <link rel="stylesheet" href="css/glide.core.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">   
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/leaflet.css">
</head>
<body>
    <?php include_once "php/templates/header.php"; ?>

    
    <section class="contenedor contenedor-contacto">
        <h2>Contáctanos</h2>

        <div class="contacto">
            <div class="info-contacto">
                <i class="fa fa-phone"></i><h4 class="titulo-info">Teléfonos</h4>
                <p>0414-2839472</p>
                <p>0424-7877329</p>

                <i class="fa fa-envelope"></i><h4 class="titulo-info">Correo electrónico</h4>
                <p>misplantasinc@gmail.com</p>

                <i class="fa fa-map-signs"></i><h4 class="titulo-info">Dirección</h4>
                <p>Francisco de Miranda Av. 64 casa 80A-55</p>
            </div>
            <div id="mapa"></div>
        </div>
    </section>


    <?php include_once "php/templates/footer.php"; ?>