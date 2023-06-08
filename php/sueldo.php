<?php
error_reporting(0);

function comisiones(){
$Empleado = $_POST['txtnombre'];
$Canti = $_POST['txtvendidos'];
$Totalven = $_POST['txttotalvendidos'];

$salario=737000;
$comisionaut = $Canti * 50000;
$PrecioTotal = $Totalven * 0.05;
$Vacomisiones = $comisionaut + $PrecioTotal;
$Nusalario = $salario + $Vacomisiones;

echo "Salario basico del empleado :". $Empleado." Es: ".$salario;
echo "<br>";
echo "Comisión por autos vendidos: ".$comisionaut;
echo "<br>";
echo "Comisión por total de ventas: ".$PrecioTotal;
echo "<br>";
echo "Total comisiones : ".$Vacomisiones;
echo "<br>";
echo "Valor del nuevo salario para el empleado  ".$Empleado;
echo "<br>";
echo "Es: ".$Nusalario;
}
comisiones();
?>