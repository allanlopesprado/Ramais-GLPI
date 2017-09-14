<?php
header("Content-Type: text/html; charset=UTF-8",true);
$servidor = 'localhost';
$usuario = 'glpi';
$senha = 'glpi';
$banco = 'glpi';
// Connecting to MySQL database
$mysqli = mysqli_connect($servidor, $usuario, $senha, $banco);
// If something went wrong, it displays an error message
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>
