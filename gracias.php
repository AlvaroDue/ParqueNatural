<?php require("util.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Gracias</title>
</head>
<body>

  <div class="container">
    <header>
      <nav>
        <ul id="menu">
          <li><a href="">Inicio</a></li>
          <li><a href="">Actividades</a>
            <ul>
              <li><a href="">Frontend</a></li>
              <li><a href="">Backend</a></li>
              <li><a href="">Mobile</a></li>
            </ul>
          </li>
          <li><a href="galeria.php">Galeria</a></li>
          <li><a href="comentarios.php">Comentarios</a></li>
        </ul>
      </nav>
    </header>
    <div id="thanks">
      <p>Hola, <span class="color"><?php $nombre = $_GET['nombre']; echo $nombre;?></span>. <br>Gracias por dejar tus comentarios.</p>
    </div>
    <div>
      <h3>Galería para ti</h3>
      <?php
        $edad = $_GET['edad'];
        if($edad <= 20) {
             echo galeriaJovenes();
          } elseif ($edad > 20 && $edad <= 50) {
            echo galeriaAdultos();
          } else {
            echo galeriaAdultoMayor();
          }
          ?>
    </div>
    <div style="clear:both; height: 50px;"></div>
  </div>

</body>
</html>
