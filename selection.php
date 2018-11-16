<?php
include("database/db_conection.php");
session_start();
# Reduce por uno en la tabla PRODUCTOS la cantidad del artículo.
$email = $_SESSION['email'];

$selection = "SELECT email FROM cliente WHERE email = '$email'";

  if ($result = $dbcon->query("SELECT email FROM cliente WHERE email = '$email'")) {

     /* fetch the first row as result */
     $row_cnt = $result->num_rows;

    if ($row_cnt >= 1) {
    printf("Tu direccion de envio esta registrada.");
    }
    else {
    printf("¡No registraste tu direccion de envio!");
    }
   /* close result set */
    $result->close();
 }

 /* close connection */
 $dbcon->close();
?>