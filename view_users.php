<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <!-- Dependencias de Bootstrap. -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <title>Administracion - BiancoBazaar</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>

<div class="table-scrol">
    <h1 align="center">Dashboard</h1>
<br>
<center>
    <button type="button" class="btn btn-outline-primary" onclick=" phpmyadmin()">Ir a PHPMyAdmin</button> 
    <button type="button" class="btn btn-outline-primary" onclick=" nuke()">Eliminar completamente la sesión</button>
    <button type="button" class="btn btn-outline-secondary" onclick=" backboi()">Volver a BiancoBazaar</button></center>

    <script>
        function phpmyadmin()
        {
            location.href = "http://localhost/phpmyadmin/db_structure.php?server=1&db=users";
        } 

        function nuke()
        {
            location.href = "nuke.php";
        } 

        function formdata()
        {
            location.href = "formdata.php";
        } 

        function backboi()
        {
            location.href = "welcome.php";
        } 
    </script>

<div class="table-responsive">


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>ID de Usuario</th>
            <th>Nombre</th>
            <th>Contraseña</th>
            <th>Correo</th>
            <th>Eliminar Usuario</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from users";
        $run=mysqli_query($dbcon,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
            $user_pass=$row[3];



        ?>

        <tr>
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
