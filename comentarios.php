<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Comentarios</title>
</head>
<body>
  <div class="container">
    <header>
      <nav>
        <ul id="menu">
          <li><a href="index.php">Inicio</a></li>
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
  <div id="wrapper">
    <h3>Deja tus comentarios</h3>
    <form name="form" method="get" action="gracias.php">
      <fieldset>
        <legend align="center">Datos</legend>
      <div class="campo trescuartos">
        <label for="nombre">Nombre:*</label><br>
        <input type="text" name="nombre" value="" size="50" placeholder="Nombre completo" required>
      </div>
      <div class="campo uncuarto">
        <label for="edad">Edad:*</label></br>
        <input type="number" name="edad">
      </div>
      <div class="campo">
        <label for="comentario">Comentario:*</label></br>
        <textarea name="comentario" rows="5" cols="80" placeholder="Escribe aquí tu comentario"></textarea>
      </div>
      <div class="boton">
        <button type="submit" name="button" >Enviar</button>
      </div>
    </fieldset>

    </form>
  </div>
  </div>
</body>
</html>
