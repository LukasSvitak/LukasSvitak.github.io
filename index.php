
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="skoda.css">
    <link rel="stylesheet" href="lightbox/lightbox.min.css">
    <title>Škoda R5</title>
    <style>
    footer {
    height: 50px;
    color: white;
    text-align: center;
    position: fixed;
    position: relative;
    bottom: -80%;
    z-index: 1;
    }
    </style>
  </head>
  <body>
 
    <nav>
      <div class="logo">
        <img src="logo.png" alt="logo" />
      </div>
      <ul>
        <li>
          <a href="index.php?stranka=domu">Domů</a>
        </li>
        <li>
          <a href="index.php?stranka=navstevnikniha">Návštěvní kniha</a>
        </li>
        <li>
          <a href="index.php?stranka=galerie">Galerie</a>
        </li>
        <li>
          <a href="index.php?stranka=multiupload">Multiupload</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
    </nav>
    <div class="menubar">
      <ul>
        <li>
          <a href="index.php?stranka=domu">Domů</a>
        </li>
        <li>
          <a href="index.php?stranka=navstevnikniha">Návštěvní kniha</a>
        </li>
        <li>
          <a href="index.php?stranka=galerie">Galerie</a>
        </li>
        <li>
          <a href="index.php?stranka=multiupload">Multiupload</a>
        </li>
      </ul>
    </div>

  <footer>
  <?php
  echo date("d.m.Y H:i:s"). ' '.date("Y");
  ?>
  </footer>
  </body>
  <script src="skoda.js"></script>
  <script src="lightbox/lightbox-plus-jquery.min.js"></script>


<?php
if (isset($_GET['stranka']))
$stranka = $_GET['stranka'];
else
$stranka = 'domu';
if (preg_match('/^[a-z0-9]+$/', $stranka)) {
$vlozeno = include('podstranky/' . $stranka . '.php');
if (!$vlozeno)
    echo('Podstránka nenalezena');
}
else
echo('Neplatný parametr.');
?>
</html>


