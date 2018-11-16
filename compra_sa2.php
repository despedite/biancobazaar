<?php
include("database/db_conection.php");
session_start();
# Reduce por uno en la tabla PRODUCTOS la cantidad del artículo.
$actualiza = "UPDATE productos SET cantidad=cantidad - 1 WHERE cod_art = 5308";
mysqli_query($dbcon,$actualiza);

# Agarra el ID del cliente de la tabla de clientes.
$email = $_SESSION['email'];
$id = mysqli_query($dbcon, "SELECT id FROM cliente WHERE email = '$email'");
$result = mysqli_fetch_array($id);
$idfinal = $result['id'];
echo $idfinal;

# Agarra el total parcial de la tabla de productos.
$tparc = mysqli_query($dbcon, "SELECT precio_unit FROM productos WHERE cod_art = 5308");
$result3 = mysqli_fetch_array($tparc);
$totalparcial = $result3['precio_unit'];
echo $totalparcial;

# Agarra el total definitivo de la tabla de productos.
$totes = mysqli_query($dbcon, "SELECT total FROM productos WHERE cod_art = 5308");
$result2 = mysqli_fetch_array($totes);
$total = $result2['total'];
echo $total;

# Agarra el valor del codigo del producto.
$prods = mysqli_query($dbcon, "SELECT cod_art FROM productos WHERE total = '$total'");
$result6 = mysqli_fetch_array($prods);
$producto = $result6['cod_art'];
echo $producto;

# Asignar todos los valores previos a la tabla FAC2.
$fac2 = "INSERT INTO fac2 (cantidad,cod_factura,cod_usuario,precio_unit,total) VALUES ('1','','$idfinal','$totalparcial','$total')";
mysqli_query($dbcon,$fac2);

# Agarra el valor del codigo de factura.
$fact = mysqli_query($dbcon, "SELECT cod_factura FROM fac2 WHERE total = '$total'");
$result9 = mysqli_fetch_array($fact);
$factura = $result9['cod_factura'];
echo $factura;

# Agarra el domicilio del comprador de la tabla de clientes.
$dominic = mysqli_query($dbcon, "SELECT domicilio FROM cliente WHERE email = '$email'");
$result4 = mysqli_fetch_array($dominic);
$domicilio = $result4['domicilio'];
echo $domicilio;

# Agarra la fecha y hora actual.
$time = date("Y-m-d H:i:s");
echo $time;

# Asignar todos los valores previos a la tabla FAC1.
$fac1 = "INSERT INTO fac1 (cod_factura,domicilio,fecha) VALUES ('','$domicilio','$time')";
mysqli_query($dbcon,$fac1);

# Para poder imprimirlos a una factura, lo guardamos en las cookies.
$_SESSION['cod_usuario'] = $idfinal;
$_SESSION['cod_fact'] = $factura;
$_SESSION['cod_art'] = $producto;
$_SESSION['fecha'] = $time;
$_SESSION['precio_unit'] = $totalparcial;
$_SESSION['total'] = $total;
$_SESSION['domicilio'] = $domicilio;
$_SESSION['fecha'] = $time;

echo"<script>window.open('done.php','_self')</script>";
?>