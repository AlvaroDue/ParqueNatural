<?php

  function galeriaJovenes() {
    $gallery= '<div id="galeria">
      <div class="gallery">
        <div class="marco">
          <a href="img/imagen1.jpg" target="_blank">
            <img src="img/imagen1.jpg" alt="Llegando al bosque" width="600" height="400"/>
          </a>
        </div>
        <div class="desc">
          Agrega descripción de la imagen. Adolescente.
        </div>
      </div>
      <div class="gallery">
        <div class="marco">
          <a href="img/imagen4.jpg" target="_blank">
            <img src="img/imagen4.jpg" alt="Surfing en el bosque" width="600" height="400"/>
          </a>
        </div>
        <div class="desc">
          Agrega descripción de la imagen. Adolescente
        </div>
      </div>
    </div>';
    return $gallery;
  }

function galeriaAdultos() {
  $galleryTwo='<div id="galeria">
    <div class="gallery">
      <div class="marco">
        <a href="img/imagen2.jpg" target="_blank">
          <img src="img/imagen2.jpg" alt="Camino al bosque" width="600" height="400"/>
        </a>
      </div>
      <div class="desc"> Adulto 1.</div>
    </div>
    <div class="gallery">
      <div class="marco">
        <a href="img/imagen3.jpg" target="_blank">
          <img src="img/imagen3.jpg" alt="Cocinando en el bosque" width="600" height="400"/>
        </a>
      </div>
      <div class="desc">  Adulto 2.</div>
    </div>
  </div>';
  return $galleryTwo;
}

function galeriaAdultoMayor() {
  $galleryThree='<div id="galeria">
    <div class="gallery">
      <div class="marco">
        <a href="img/imagen5.jpg" target="_blank">
          <img src="img/imagen5.jpg" alt="Cabaña en el bosque" width="600" height="400"/>
        </a>
      </div>
      <div class="desc">Adulto Mayor 1.</div>
    </div>
    <div class="gallery">
      <div class="marco">
        <a href="img/imagen6.jpg" target="_blank">
          <img src="img/imagen6.jpg" alt="Sendero en el Bosque" width="600" height="400"/>
        </a>
      </div>
      <div class="desc">Adulto Mayor 2.</div>
    </div>
  </div>';
  return $galleryThree;
}
 ?>
