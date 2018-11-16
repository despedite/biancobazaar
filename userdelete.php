<?php
session_start();

include("database/db_conection.php");
$delete_email=$_SESSION['email'];
//Elimina de la base de datos tus datos de inicio de sesión.
$delete_query="delete  from users WHERE user_email='$delete_email'";
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
	//Cierra la sesión!
    session_destroy();
	header("Location: welcome.php");
}
else {echo "No pudimos eliminar tu cuenta.";}

?>