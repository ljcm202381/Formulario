<?php

class Empleado
{

  private $Nombre;
  private $Sueldo;


  public function inicializar($Nomb,$Suel)
  {
  	$this->Nombre=$Nomb;
  	$this->Sueldo=$Suel;
  }

  public function pagarimpuesto()
  {

  	if($this->Sueldo>200000)
  	{
  		echo " ".$this->Nombre." "."Debe pagar impuesto";
  	}
  	else 
  	{
  		echo " " .$this->Nombre." "."No debe pagar impuesto";
  	}
  }

}
$emp = new Empleado();
$emp->inicializar("Alejandro",400000);
$emp->pagarimpuesto();

echo "Segundo empleado";
$emp2 = new Empleado();
$emp2->inicializar("Deisy",200000);
$emp2->pagarimpuesto();


?>