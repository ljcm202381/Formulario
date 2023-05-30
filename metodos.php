<?php
//Variables globales
$Nume1 = $_POST['txtn1'];
$Nume2 = $_POST['txtn2'];

//funciones sin parametros si retorno
function sumar()
{

$Numero1 = $_POST['txtn1'];
$Numero2 = $_POST['txtn2'];

  //variable local
   $Suma = $Numero1+$Numero2;
   echo "<br>";
   echo "El resultado de la suma es:". $Suma;
}
//Funcion con parametros sin  retorno
function restar($Nume1,$Nume2)
{
    $Resta = $Nume1-$Nume2;
    echo "El resultado de la resta es:". $Resta;

}
//funcion con parametros con retorno
function multiplicar($Nume1,$Nume2)
{

    $Multi = $Nume1 * $Nume2;
    echo "El resultado es: ".$Multi;
 return $Multi;
 
}
//funcion con parametros sin retorno
function dividir($Nume1,$Nume2)
{
    $Divi = $Nume1/$Nume2;
    echo "El resultado es: ".$Divi;
}

sumar();
echo "<br>";
restar($Nume1,$Nume2);
echo "<br>";
multiplicar($Nume1,$Nume2);
echo "<br>";
dividir($Nume1,$Nume2);





?>