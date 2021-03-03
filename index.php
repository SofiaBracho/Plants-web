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
    <script src="https://kit.fontawesome.com/72df3b1037.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include_once "php/templates/header.php"; ?>

    <div class="contenedor">

        <main class="seccion main">
            <div class="imagen">
                <div class="rectangulo">
                    <img src="img/planta.jpg" alt="Planta">
                </div>
            </div>
            
            <div class="informacion">
                <h2>Si buscas plantas este es el lugar</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quas laborum repellat numquam dolor ipsa aliquam facere deserunt nesciunt magnam repudiandae debitis repellendus eaque laboriosam, itaque tenetur ea. Ex, amet!
                Sapiente fugit numquam maxime provident beatae consectetur, illum perferendis laborum cumque quos, similique assumenda, praesentium sed! Totam voluptatum aliquid delectus ex sit veritatis reiciendis, excepturi sequi obcaecati eaque nihil. Ea?
            </div>
        </main>

        <div class="seccion imagenes glide">
            
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                  <li class="glide__slide">
                    <img src="img/1.jpg" alt="">
                  </li>
                  <li class="glide__slide">
                    <img src="img/2.jpg" alt="">
                  </li>
                  <li class="glide__slide">
                    <img src="img/3.jpg" alt="">
                  </li>
                  <li class="glide__slide">
                    <img src="img/4.jpg" alt="">
                  </li>
                </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
            </div>
            
        </div>

    </div>

    <div class="seccion centrado vertical cartel">
        <h2>Somos especialistas en plantas</h2>
        <p class="animado">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum at nobis error, aliquid libero necessitatibus omnis dolor nulla reprehenderit deleniti assumenda aperiam culpa nesciunt laborum blanditiis a sit debitis quasi!
    </div>

    <div class="contenedor">
        <div class="seccion tarjetas">
            <div class="tarjeta">
                <h3>Titulo 1</h3>
                <p class="animado"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias in itaque officiis sunt praesentium blanditiis beatae quae aperiam officia, qui unde neque sequi optio facere nulla! Est molestiae harum quo.
                Assumenda voluptas earum illum cumque, fugit esse id eius dolor cum eligendi maiores necessitatibus cupiditate rerum voluptate, itaque repudiandae magni debitis! Corporis, eligendi! Unde quae natus magnam illum sint aliquam. </p>
            </div>
            <div class="tarjeta">
                <h3>Titulo 2</h3>
                <p class="animado">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus fugiat voluptatum quidem corrupti eius, cupiditate unde ducimus molestias, explicabo perferendis, nihil minus voluptas eos esse pariatur vitae fugit reprehenderit porro.
                Explicabo voluptate iure obcaecati pariatur id soluta accusamus, aperiam nisi nesciunt illo quibusdam amet corrupti reprehenderit optio voluptates eveniet hic ex? Rerum culpa molestiae autem veritatis earum minus! Ipsum, consequuntur?</p>
            </div>
        </div>
    </div>


    <?php include_once "php/templates/footer.php"; ?>