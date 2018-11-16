<?php
include("header.php");
include("database/db_conection.php");
?>

<html>
<head>
  <style>
.parallax { 
    /* The image used */
    background-image: url("img/cover.jpg");

    /* Set a specific height */
    height: 400px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<div class="parallax"></div>

<div class="contenido">

<?php if(!isset($_SESSION['email'])) { ?>
<div class="alert alert-primary" role="alert">
  ¿Aún no estás registrado? <a href="registration.php" class="alert-link">Registrate</a> o <a href="login.php" class="alert-link">inicia sesión</a>!
</div>

<?php
 }

if(isset($_SESSION['email'])){
$email = $_SESSION['email'];

$selection = "SELECT email FROM cliente WHERE email = '$email'";

  if ($result = $dbcon->query("SELECT email FROM cliente WHERE email = '$email'")) {

     /* fetch the first row as result */
     $row_cnt = $result->num_rows;

    if (!($row_cnt >= 1)) {
?>
<div class="alert alert-warning" role="alert">
  Completá el <a href="reg_envio.php" class="alert-link">formulario de envío</a> para que te podamos enviar tus compras de lo más rápido. 
</div>
<?php }}} ?>

<div class="jumbotron">
  <h1 class="display-4">Un Bazaar para dominarlos a todos.</h1>
  <p class="lead">Bienvenido al sitio web de compras definitivo de erikbian.co, BiancoBazaar. Comprá productos y otras cosas creadas por mí y dame suficiente dinero como para subsistir otro día. <i>Por favor, me muero de hambre.</i></p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="lista.php" role="button">Ver productos</a>
  </p>
</div>

<br>

<div class="card-deck">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/de1.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">DespediteErik - Primera Temporada <span class="badge badge-pill badge-warning">Nuevo</span></h5>
    <p class="card-text">Un DVD con las 8 aventuras de la primera temporada de DespediteErik. ¡También incluye cada shitpost como extra!</p>
    <button type="button" class="btn btn-outline-primary" disabled>$490</button> <a href="producto.php" class="btn btn-primary">Comprar ahora</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/cal.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Calvrett Collection <span class="badge badge-info">Steam Key</span></h5>
    <p class="card-text">Los tres epicos juegos de BareiroPlaza: Sam, Brasil y Calvrett; remasterizados en PC para una nueva era - con graficos en 4K y inteligencia artificial.</p>
    <button type="button" class="btn btn-outline-primary" disabled>$150</button> <a href="calvrett.php" class="btn btn-primary">Comprar ahora</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/flip.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Flippin' Out! <span class="badge badge-info">Steam Key</span></h5>
    <p class="card-text">El juego de Pinball donde tus controles cambian a cada turno creado en 48 horas para la GMTK(gamejam); volvió, con aún más opciones y mejoras! Y con mejoras, me refiero a que ahora cuesta plata. Sip, <a href="https://despediteerik.itch.io/flippinout">es el mismo juego.</a></p>
    <button type="button" class="btn btn-outline-primary" disabled>$200</button> <a href="flip.php" class="btn btn-primary">Comprar ahora</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/cb.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Libro - The Making of Corre, Bareiro <span class="badge badge-pill badge-success">20% OFF</span></h5>
    <p class="card-text">La biografía definitiva para los fans del clásico juego de BareiroPlaza: Corre, Bareiro. Incluye un cover tapa dura ilustrado a mano por el mismisimo Alexis Bareiro, junto con 180 páginas completamente vacías.</p>
    <button type="button" class="btn btn-outline-primary" disabled><del>$170</del> $136</button> <a href="corre.php" class="btn btn-primary">Comprar ahora</a>
  </div>
</div>
</div>


<br>


<center><button type="button" class="btn btn-outline-primary" onclick=" arts()">Ver todos los articulos</button></center>
    <script>
        function arts()
        {
            location.href = "lista.php";
        } 
    </script>


<br>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Creado por <a href="https://www.youtube.com/channel/UCxv0iXk8XWHB7U7GqJbDoZA">Erik Bianco Vera</a> usando <a href="https://getbootstrap.com/">Bootstrap</a>, <a href="https://www.apachefriends.org/index.html">XAMPP</a> y unas cuantas tazas de café. <a href="shh.html">☕</a></li>
  </ol>
</nav>

</body>

</html>

