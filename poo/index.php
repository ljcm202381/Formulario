<?php

include_once "clasecuenta.php";
$propi=40414;
$contra=123;
// crear un objeto
$saldo=0;
$cuenta=0;
$propietario=$_POST['txttitular'];
$contrasena=$_POST['txtcontrasena'];
$usuario = new Cuenta($saldo,$cuenta,$propietario,$contrasena);
$propietario=$propi;
$contrasena=$contra;
$usuario->validarcuenta($propietario,$contrasena);

$usuario->consultasaldo();
echo "<br>";
$usuario->deposito(100000);

echo $usuario->consultasaldo();
$usuario->deposito(200000);
echo "<br>";
echo $usuario->consultasaldo();
echo "<br>";
$usuario->retiro(200000);


?>

