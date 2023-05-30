<?php
//Definir las variables php que se reciben de las variables 
// del formulario.
$Nombrep = $_POST['txtnombre'];
$Edadp = $_POST['txtedad'];
$Genero = $_POST['txtgenero'];

echo "Los datos ingresados son:";
echo "<br>";
echo "Nombre ingresado: ".$Nombrep;
echo "<br>";
echo "Edad ingresao: ".$Edadp;
echo "<br>";
echo "Item seleccionado: ".$Genero;

if($Edadp<=18)
{
    echo"es menor de edad";
}else 
{
    echo "es mayor de edad";
}

/*
$Color = $_POST['txtcolor'];

switch($Color)
{
 case "rojo":
    echo "El rojo es su color favorito";
 break;
 case "amarillo":
    echo "el amarillo es su color favorito";
    break;
 case "azul":
    echo "el azul es su color favorito";
    break;
    default:
    echo "ha ingreso un color incorrecto";      
}
*/

?>