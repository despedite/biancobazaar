<?php
include("header.php");
include("database/db_conection.php");

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<html>
<head>
</head>
<body>
<div class="contenido">

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Modificar cuenta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin2.php">Eliminar cuenta</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <p class="card-text">
<?php
$email = $_SESSION['email'];

$selection = "SELECT email FROM cliente WHERE email = '$email'";

  if ($result = $dbcon->query("SELECT email FROM cliente WHERE email = '$email'")) {

     /* fetch the first row as result */
     $row_cnt = $result->num_rows;

    if (!($row_cnt >= 1)) {
?>
<div class="alert alert-warning" role="alert">
  Para poder editar tus datos, primero tienes que completar el <a href="reg_envio.php" class="alert-link">formulario de envío</a>.
</div>
<?php } else { ?>
<form action="update.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="correo" aria-describedby="emailHelp" placeholder="Ingresa tu correo que usaste para el registro. Este no se cambiará!">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nombre" placeholder="Ingresa el nuevo nombre.">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="apellido" placeholder="Ingresa el nuevo apellido.">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Domicilio</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="direccion" placeholder="Ingresa el nuevo domicilio.">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Código Postal</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="codpst" placeholder="Ingresa el nuevo código postal.">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">DNI</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="dni" placeholder="Ingresa el nuevo DNI.">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Forma de Pago</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="pago" placeholder="Ingresa la nueva forma de pago.">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
<?php }} ?>      
    </p>
  </div>
</div>

</body>
</html>

