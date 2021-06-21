<!-- ESTE ES MI TEMPLATE DEL HEADER

Lo puedo incluir fácilmente en todas las páginas con include. 
-->



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="build/css/app.css" />
    <title>Sumo Living: Contact</title>
  </head>
  <body>
    <!-- 
      Para añadir la clase especial que diferencia el header del index del header del resto de páginas, 
      añado una condicional. 
      Si $home es true, entonces se añade la clase home.
      -->
    <header class="header <?php echo isset( $home ) ? "home" : "";  ?>">
      <div class="dark container">
        <img
          class="dark-mode-btn"
          src="build/img/dark-mode.svg"
          alt="dark mode icon"
        />
      </div>
      <div class="container header-content">
        <div class="nav">
          <a href="index.php">
            <p class="logo">SUMO LIVING</p>
          </a>
          <div class="mobile-menu">
            <img src="build/img/barras.svg" alt="responsive menu icon" />
          </div>
          <nav class="nav-content">
            <a href="about.php">About us</a>
            <a href="news.php">News</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contact</a>
          </nav>
        </div>
      </div>
    </header>