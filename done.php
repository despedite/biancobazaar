<?php
include("header.html");
?>

<html>
<head>
</head>
<body>
<div class="contenido">

<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Confirmar compra</a></li>
    <li class="breadcrumb-item"><a href="#">Formulario de Envio</a></li>
    <li class="breadcrumb-item"><a href="#">Procesar</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listo</li>
  </ol>
</nav>

<div class="card">
  <div class="card-header">
    Ya casi terminamos...
  </div>
  <div class="card-body">
    <h5 class="card-title">Imprime tu factura</h5>
    <p class="card-text">¡El procesamiento de tu compra está listo y tu objeto está en camino! Puedes imprimir tu factura en esta página por si la llegas a necesitar más tarde, o sacarle una captura de pantalla en digital si eso prefieres.</p>
    <hr>
    <p class="card-text">
      <label for="exampleInputEmail1">Código de Cliente</label><br><input class="form-control" type="text" placeholder="<?php echo $_SESSION['cod_usuario']; ?>" readonly><br>
      <label for="exampleInputEmail1">Código de Producto</label><br><input class="form-control" type="text" placeholder="<?php echo $_SESSION['cod_art']; ?>" readonly><br>
      <label for="exampleInputEmail1">Código de Factura</label><br><input class="form-control" type="text" placeholder="<?php echo $_SESSION['cod_fact']; ?>" readonly><br>
      <label for="exampleInputEmail1">Cantidad</label><br><input class="form-control" type="text" placeholder="1" readonly><br>
      <label for="exampleInputEmail1">Precio Unitario</label><br><input class="form-control" type="text" placeholder="$<?php echo $_SESSION['precio_unit']; ?>" readonly><br>
      <label for="exampleInputEmail1">Precio Total</label><br><input class="form-control" type="text" placeholder="$<?php echo $_SESSION['total']; ?>" readonly><br><small id="emailHelp" class="form-text text-muted">(Añadido al 21% de IVA.)</small><br>
      <hr>
      <label for="exampleInputEmail1">Domicilio</label><br><input class="form-control" type="text" placeholder="<?php echo $_SESSION['domicilio']; ?>" readonly><br>
      <label for="exampleInputEmail1">Fecha</label><br><input class="form-control" type="text" placeholder="<?php echo $_SESSION['fecha']; ?>" readonly><br>
    <button type="button" class="btn btn-primary" onclick="myFunction()">Imprime esta página</button>
    <a href="andshipit.php" class="btn btn-secondary">Listo</a>
  </div>
</div>

</div>

<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>