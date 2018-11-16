<?php
include("database/db_conection.php");
session_start();

$web_correo=$_SESSION['email'];
$web_nombre=$_POST['nombre'];
$web_apellido=$_POST['apellido'];
$web_direccion=$_POST['direccion'];
$web_codpst=$_POST['codpst'];
$web_dni=$_POST['dni'];
$web_pago=$_POST['pago'];

# Reduce por uno en la tabla PRODUCTOS la cantidad del artículo.
$upd_nombre = "UPDATE cliente SET nombre = '$web_nombre' WHERE email = '$web_correo'";
$upd_apellido = "UPDATE cliente SET apellido = '$web_apellido' WHERE email = '$web_correo'";
$upd_direccion = "UPDATE cliente SET domicilio = '$web_direccion' WHERE email = '$web_correo'";
$upd_codpst = "UPDATE cliente SET codpst = '$web_codpst' WHERE email = '$web_correo'";
$upd_dni = "UPDATE cliente SET dni = '$web_dni' WHERE email = '$web_correo'";
$upd_pago = "UPDATE cliente SET pago = '$web_pago' WHERE email = '$web_correo'";


mysqli_query($dbcon,$upd_apellido);
mysqli_query($dbcon,$upd_direccion);
mysqli_query($dbcon,$upd_codpst);
mysqli_query($dbcon,$upd_dni);
mysqli_query($dbcon,$upd_pago);
if(mysqli_query($dbcon,$upd_nombre)){ 
    echo "Record was updated successfully."; 
} else { 
    echo "ERROR: Could not able to execute $upd_nombre. " . mysqli_error($dbcon); 
}  
?>