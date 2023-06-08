<?php
//vectores asociativos

$Aprendiz['documento']="40414";
$Aprendiz['Nombre']="Johanna";
$Aprendiz['Apellido']="Cifuentes";
$Aprendiz['Correo']="cifuentes0903@.gmail.com";

echo $Aprendiz['documento'];

//
$Aprendiz = array('documento' => '51935','nombre' => 'Sara' , 'apellido' => 'gomez','correo'=>'cif@gmail.com');
echo "<br>";
echo $Aprendiz['correo'];
echo "<br>";
foreach ($Aprendiz as $key => $value) {
	
	echo "Para los datos de : ".$key. "    Su información es la siguiente: ".$value;
	echo "<br>";
}

$suma=0;
$Numeros = array('Numero1'=>40 ,'Numero2'=>50,'Numero3'=>60,'Numero4'=>70,'Numero5'=>80);

 foreach($Numeros as $num => $valor)
 {
 	//acumulador
 	$suma = $suma+$valor;

 }
 echo "El resultado de la suma es: ".$suma;
?>