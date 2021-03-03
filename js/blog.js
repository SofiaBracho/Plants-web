(function() {
    //Blog articles container
    const articulos = document.getElementById("articulos");

    //Fetch max 10 articles from DB
    function fetchArticles() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let respuesta = JSON.parse(this.responseText);
                let template = "";

                respuesta.forEach(articulo => {
                    //Crear template para introducirlo en el HTML

                    template += `
                    <article class="articulo">
                        <h3 class="titulo">${articulo.titulo}</h3>
                        <img src="img/img_blog/${articulo.url_imagen}" alt="Imagen del artículo">
                        <p>${articulo.texto}</p>
                        <div class="info-articulo">
                            <p class="fecha">Fecha: ${articulo.fecha}</p>
                            <p class="autor">Autor: ${articulo.autor}</p>
                        </div>
                    </article>
                    `;
                });
                
                articulos.innerHTML = template;
                console.log(template);
            }
        };
        xhr.open("POST", "php/modelo-articulos.php", true);
        xhr.send();
    }

    fetchArticles();
})();