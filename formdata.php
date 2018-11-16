<?php
session_start();
unset($_SESSION['variableName']);
header("Location: view_users.php");
?>