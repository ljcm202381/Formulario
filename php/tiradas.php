<?php
$Total=0;
$par=0;
$impar=0;
$numero = rand(1,10);
echo "Tirada de $numero dados";

echo "<br>";
//Defino el vector
$dados=[];
//Llenar el vector con los valores del dado
for($y=0;$y<$numero;$y++)
{
    $dados[$y]=rand(1,6);
}

//Mostrar las imagenes
for($y=0;$y<$numero;$y++)
{
    echo"<img src=\"../img/$dados[$y].svg\" width=\"120\" height=\"120\">\n";
}

//mostrar los numeros
for($y=0;$y<$numero;$y++)
{
    echo "<br>";
   // echo "".$dados[$y];
   $Total = $Total+$dados[$y];
   echo "<br>";
   
   if($dados[$y]% 2)
   {
    $impar++;

   }
   else 
   {
     $par++;
   }

}
echo "la suma de datos es:".$Total;
echo "<br>";
echo "cantidad de pares: ".$par;
echo "<br>";
echo "cantidad de impares: ".$impar;





?>