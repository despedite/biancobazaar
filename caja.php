<?php
include("header.html");
?>

<html>
<head>
</head>
<body>
<div class="contenido">
<div class="card-group">
<div class="card" style="width: 21rem;">
  <div class="card-body">
    <h5 class="card-title">Caja</h5>
    <h6 class="card-subtitle mb-2 text-muted">$15</h6>
    <p class="card-text"><i>Es solo una caja.</i></p>
    <?php if(isset($_SESSION['email'])) { ?>
    <a href="compra_cj1.php" class="card-link">Comprar</a>
    <?php } else { ?>
    <a href="registration.php" class="card-link">Registrate</a>
    <?php } ?>
  </div>
</div>
<div class="card" style="width: 32rem;">
  <img class="card-img-top" src="img/box.jpg" alt="Card image cap">
</div>
</div>
<br>

<div class="card-deck">


<div class="card border-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Formas de pago</div>
  <div class="card-body text-dark">
    <h5 class="card-title">Pagá con lo que quieras</h5>
    <p class="card-text">Gracias al poder de Mercadopago, aceptamos VISA y Mastercard de múltiples bancos, además de transferencias en efectivo vía locales de PagoFácil y Rapipago. Mirá más métodos de financiación <a href="https://www.mercadopago.com.ar/ayuda/medios-de-pago-cuotas-promociones_264">acá.</a></p>
  </div>
</div>

<div class="card border-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Métodos de envío</div>
  <div class="card-body text-dark">
    <h5 class="card-title">Te lo llevamos a tu casa</h5>
    <p class="card-text">Tenés múltiples formas de recibir tu producto: podés pasarlo a buscar en la estación de Constitución o cualquier otro trayecto del Tren Roca, o te lo mandamos por MercadoEnvíos si querés que llegue más rápido.</a></p>
  </div>
</div>

<div class="card border-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Últimos pasos</div>
  <div class="card-body text-dark">
    <h5 class="card-title">Y lo tenés allá</h5>
    <p class="card-text">Después de terminar la compra y especificar tu dirección de envío, ¡eso es todo! MercadoPago te dará un código para que trackees tu envío y nos mantendrémos en contacto. ¡Gracias por usar BiancoBazaar!</a></p>
  </div>
</div>

</div>
</body>
</html>