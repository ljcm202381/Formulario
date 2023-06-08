<?php

$GrupoA = [5,4,3,2,5];
$GrupoB = [4,3,2,3,4];

for($i=0;$i<count($GrupoA);$i++)
{

	$sumatoriaA=$sumatoriaA+$GrupoA[$i];
	$sumatoriaB=$sumatoriaB+$GrupoB[$i];
}
$Pa = $sumatoriaA/count($GrupoA);
$Pb = $sumatoriaB/count($GrupoB);


echo "promedio de A:".$Pa;
echo "Promedio de B:".$Pb;

$general = $Pa+$Pb/2;

echo "el promedio general: ".$general;

if($Pa > $Pb)
{
	echo "EL grupo A tiene el mejor promedio";
}else
{
	echo "EL grupo B tiene el mejor promedio";
}


?>