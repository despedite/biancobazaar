<?php
include("header.html");
?>

<html>
<head>
</head>
<body>
<div class="contenido">

<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Confirmar compra</a></li>
    <li class="breadcrumb-item"><a href="#">Formulario de Envio</a></li>
    <li class="breadcrumb-item"><a href="#">Procesar</a></li>
    <li class="breadcrumb-item"><a href="#">Listo</a></li>
  </ol>
</nav>

<div class="card">
  <div class="card-header">
    ¡Felicidades!
  </div>
  <div class="card-body">
    <h5 class="card-title">Tu producto está en camino</h5>
    <p class="card-text">¡Muchas gracias por comprar en BiancoBazaar! Tu producto está en camino. Ahora relajate y seguí navegando - un email te llegará con tus datos de venta en unos instantes.</p>
    <a href="welcome.php" class="btn btn-primary">Ir a BiancoBazaar</a>  
    <a href="done.php" class="btn btn-secondary">Volver a la Impresión</a>
  </div>
</div>

</div>
</body>
</html>