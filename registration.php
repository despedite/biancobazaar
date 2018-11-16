
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link rel="icon" 
      type="image/png" 
      href="img/favicon.png">
    <title>Registrate - BiancoBazaar</title>
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
                    <h3 class="panel-title">Registrate</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nombre de Usuario" name="name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Correo" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Subir" name="register" >

                        </fieldset>
                    </form>
                    <center><b>¿Ya estás registrado?</b> <br></b><a href="login.php">Iniciá Sesión</a></center>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("database/db_conection.php"); #Crea la conexión.
if(isset($_POST['register']))
{
    #Agarra el resultado del array POST y lo pone en una variable.
    $user_name=$_POST['name']; 
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];


    if($user_name=='')
    {
        #Revisa que hayas puesto todo via Javascript
        echo"<script>alert('Por favor, ingresa un nombre de usuario.')</script>";
exit();
    }

    if($user_pass=='')
    {
        echo"<script>alert('Por favor, ingresa una contraseña.')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Por favor, ingresa un correo electronico.')</script>";
    exit();
    }
    #Revisa si el usuario ya esta registrado para que no se pueda registrar otra vez.
    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('El correo $user_email ya existe en la base de datos. ¿Intentá iniciar sesión?')</script>";
exit();
    }
    #Si todo va bien, insertalo en la database.
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }

}

?>