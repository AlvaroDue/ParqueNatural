<html>
 <head>
   <link href="css/style.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 </head>
  <body>
    <div class="container">
    <header>
      <!--
      Estructura básica en HTML: dentro de nuestro elemento “body” crearemos un elemento “header”, el cual será una barra de navegación superior. Dentro colocaremos el elemento “nav” que contendrá el menú desplegable en forma de lista, esta lista “ul” tendrá como id “menu”. Como items de la lista tendremos “Inicio”, “Cursos”, “Tutoriales” y “Contacto”. El item “Cursos” contendrá una lista anidada con los items “Frontend”, “Backend” y “Mobile”, cada item contendrá su respectivo enlace:
      -->
      <nav>
        <ul id="menu">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="">Actividades</a>
            <ul>
              <li><a href="">Caminata</a></li>
              <li><a href="">Remo</a></li>
              <li><a href="">Campamento</a></li>
            </ul>
          </li>
          <li><a href="galeria.php">Galeria</a></li>
          <li><a href="comentarios.php">Comentarios</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <div id="slider">
          <div id="contentSlider">
            <img src="img/slider.jpg" alt="" class="slide">
            <div class="textSlide">
              <div class="lineup"></div>
              <p class="titleSlider">Bienvenido</p>
              <p class="subtitleSlider">al Parque Natural</p>
              <div class="linedown"></div>
            </div>
          </div>
      </div>
    </section>
  </div>
  </body>
</html>
