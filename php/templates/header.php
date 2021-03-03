<?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php', '', $archivo);
?>


<div class="hero <?=($pagina != 'index') ? "hero-min" : "";?>">
    <div class="info">
        <a href="index.php"><img src="img/pngocean.png" alt="Logo Plantas" class="logo"></a> 

        <nav class="menu">
            <ul>
                <li> <a href="galeria.php">Nuestras plantas</a> </li>
                <li> <a href="blog.php">Blog</a> </li>
                <li> <a href="about.php">Sobre Nosotros</a> </li>
                <li> <a href="contacto.php">Contacto</a> </li>
            </ul>
        </nav>
    </div>
    
    <?php if(($pagina == 'index')) { ?>
        <div class="main-msj">
            <h1>Plantas de todo tipo al alcance de tu mano</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi dicta deserunt fugiat voluptatum dignissimos a, corporis commodi quis natus temporibus non quod qui totam numquam nulla, enim esse magnam iste?</p>
        </div>
    <?php } ?>
</div>