<?php
include("header.html");
include("database/db_conection.php");
?>

<html>
<head>
</head>
<body>
<div class="contenido">

<div class="progress">
      <?php 
      $email = $_SESSION['email'];

      $selection = "SELECT email FROM cliente WHERE email = '$email'";

      if ($result = $dbcon->query("SELECT email FROM cliente WHERE email = '$email'")) {

      /* fetch the first row as result */
      $row_cnt = $result->num_rows;

      if (!($row_cnt >= 1)) { ?>
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  <?php }
   if ($row_cnt >= 1) {?>
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    <?php }} ?>
</div>
<br>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Confirmar compra</a></li>
      <?php 
      $email = $_SESSION['email'];

      $selection = "SELECT email FROM cliente WHERE email = '$email'";

      if ($result = $dbcon->query("SELECT email FROM cliente WHERE email = '$email'")) {

      /* fetch the first row as result */
      $row_cnt = $result->num_rows;

      if (!($row_cnt >= 1)) { ?>
    <li class="breadcrumb-item active" aria-current="page"></a>Formulario de Envio</li>
  <?php }
   if ($row_cnt >= 1) {?>
    <li class="breadcrumb-item"><a href="#">Formulario de Envio</a></li>
    <?php }} ?>
    <li class="breadcrumb-item active" aria-current="page">Procesar</li>
    <li class="breadcrumb-item active" aria-current="page">Listo</li>
  </ol>
</nav>
<div class="card-body">

<div class="card">
  <div class="card-header">
    ¿Quieres confirmar la compra?
  </div>
      <?php 
      $email = $_SESSION['email'];

      $selection = "SELECT email FROM cliente WHERE email = '$email'";

      if ($result = $dbcon->query("SELECT email FROM cliente WHERE email = '$email'")) {

      /* fetch the first row as result */
      $row_cnt = $result->num_rows;

      if (!($row_cnt >= 1)) { ?>
    <h5 class="card-title">Antes de empezar...</h5>
    <p class="card-text">Tendrás que completar un formulario de envío para poder empezar tu compra. Te pediremos unos datos y volverás a la página principal, luego de eso podrás continuar con tu compra aquí.</p>
    <a href="reg_envio.php" class="btn btn-primary">Empecemos</a>
  <?php }
   if ($row_cnt >= 1) {?>
    <h5 class="card-title">¡Estamos listos!</h5>
    <p class="card-text">Ya has completado el formulario de envio, asi que podemos empezar con la compra. Asegurate de que estés comprando lo que quieres antes de continuar.</p>
    <a href="compra_de2.php" class="btn btn-primary">Continuar</a>
  <?php }} ?>
  </div>
</div>

</div>
</body>
</html>