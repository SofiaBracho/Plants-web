<?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php', '', $archivo);
?>

<footer id="footer">
        <div class="contenedor">
            <div class="identificacion">
                <a href="index.html"> <img src="img/pngocean.png" alt="Logo"> </a>
                <div class="copyright">
                    <h4>Plantas Inc</h4>
                    <p>Todos los derechos reservados 2020 ®</p>
                </div>
            </div>
            
            <nav class="redes-sociales">
                <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                <a href="#"> <i class="fab fa-instagram"></i> </a>
                <a href="#"> <i class="fab fa-twitter"></i> </a>
            </nav>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/72df3b1037.js" crossorigin="anonymous"></script>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src=" <?php echo $pagina=='galeria' ? "js/lightbox.js" : ""; ?> "></script>
    <script src=" <?php echo $pagina=='blog' ? "js/blog.js" : ""; ?> "></script>
    <script src=" <?php echo $pagina=='contacto' ? "js/leaflet.js" : ""; ?> "></script>
    <script src="js/script.js"></script>
</body>
</html>