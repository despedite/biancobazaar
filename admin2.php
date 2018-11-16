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
        <a class="nav-link" href="admin.php">Modificar cuenta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Eliminar cuenta</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <p class="card-text">
		<form action="userdelete.php">
    		<button type="submit" class="btn btn-danger">Eliminar</button>
    		<small id="emailHelp" class="form-text text-muted">Ten cuidado - esta acción no se puede deshacer!</small>
  		</form>
    </p>
  </div>
</div>

</body>
</html>

