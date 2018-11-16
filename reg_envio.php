<?php
include("database/db_conection.php");
session_start();

if(!$_SESSION['email'])
{

    header("Location: welcome.php");
}

$email = $_SESSION['email'];

$selection = "SELECT email FROM cliente WHERE email = '$email'";

  if ($result = $dbcon->query("SELECT email FROM cliente WHERE email = '$email'")) {

     $row_cnt = $result->num_rows;

    if ($row_cnt >= 1) {
        header("Location: welcome.php");
    }
}

?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link rel="icon" 
      type="image/png" 
      href="img/favicon.png">
    <title>Datos de Envio - BiancoBazaar</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Datos de Envio</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="reg_envio.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nombre" name="nombre" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Apellido" name="apellido" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Domicilio" name="domicilio" type="text" value="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Código Postal" name="codpst" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="DNI" name="dni" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Forma de Pago" name="pago" type="text" autofocus>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("database/db_conection.php");
if(isset($_POST['register']))
{
    $cliente_nombre=$_POST['nombre'];
    $cliente_apellido=$_POST['apellido'];
    $cliente_domicilio=$_POST['domicilio'];
    $cliente_codpst=$_POST['codpst'];
    $cliente_dni=$_POST['dni'];
    $cliente_pago=$_POST['pago'];
    $email = $_SESSION['email'];


    if($cliente_nombre=='')
    {
        
        echo"<script>alert('Por favor, ingrese su nombre.')</script>";
exit();
    }

    if($cliente_apellido=='')
    {
        echo"<script>alert('Por favor, ingrese su contraseña.')</script>";
exit();
    }

    if($cliente_domicilio=='')
    {
        echo"<script>alert('Por favor, ingrese su domicilio.')</script>";
exit();
    }

    if($cliente_codpst=='')
    {
        echo"<script>alert('Por favor, ingrese su código postal.')</script>";
exit();
    }
    
    if($cliente_dni=='')
    {
        echo"<script>alert('Por favor, ingrese su DNI.')</script>";
exit();
    }

    if($cliente_pago=='')
    {
        echo"<script>alert('Por favor, ingrese su forma de pago.')</script>";
exit();
    }

    $insert_user="insert into cliente (nombre,apellido,domicilio,codpst,dni,pago,email) VALUE ('$cliente_nombre','$cliente_apellido','$cliente_domicilio','$cliente_codpst','$cliente_dni','$cliente_pago','$email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        $_SESSION["envio"] = "true";
        echo"<script>window.open('welcome.php','_self')</script>";
    }

}

?>