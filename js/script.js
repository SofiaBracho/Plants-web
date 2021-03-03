(function(){

  if(document.querySelector('.glide')){
    var glide = new Glide('.imagenes', {
        type: 'carousel',
        perView: 3,
        focusAt: 'center',
        gap: 50,
        breakpoints: {
          800: {
            perView: 2
          },
          480: {
            perView: 1
          }
        }
    }).mount()
  }

    //Animación de texto
    const animado = document.querySelectorAll('.animado');
    
    document.addEventListener('scroll', () => {
      let scroll = document.documentElement.scrollTop;

      animado.forEach(elemento => {
        if(elemento.offsetTop -500 < scroll) {
          elemento.style.opacity = 1;
          elemento.classList.add('desplazarAbajo');
        }
      });
    });

    //Mapa
    if(document.getElementById('mapa')) {
      var map = L.map('mapa').setView([10.67166, -71.65339], 13);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([10.67166, -71.65339]).addTo(map)
          .bindPopup('Plantas Inc. <br/> Consigue aquí tus plantas')
          .openPopup()
  }


})();