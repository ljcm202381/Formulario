<?php
//Definir un vector
$Notas[0]=4.5;
$Notas[1]=3.2;
$Notas[2]=4.0;
$Notas[3]=3.3;
$Notas[4]=2.4;



echo $Notas[2];
echo "<br>";
echo count($Notas);
echo "<br>";

for($i=0;$i<=4;$i++)
{

    echo $Notas[$i];
    echo "<br>";


}

$Dias[0]="Lunes";
$Dias[1]="Martes";
$Dias[2]="Miercoles";
$Dias[3]="Jueves";
$Dias[4]="Viernes";
$Dias[5]="Sabado";
$Dias[6]="Domingo";

echo count($Dias);
echo "<br>";
Echo $Dias[0];
echo "<br>";
echo $Dias[6];

?>