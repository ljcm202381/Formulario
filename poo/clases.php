<?php
class Persona
{
	//definir atributos globales
	//modificadores de acceso private,public,protected

 private $Nombre;
 private $Altura;

  //creamos las funciones
  public function inicial($Nom,$Esta)
  {
    $this->Nombre=$Nom;
    $this->Altura=$Esta;

   }
  public function caminar()
  {
     echo $this->Nombre;
     echo "<br>";
     echo "Va a salir a caminar despues de la clase";
  }

  public function estatura()
  {
  	echo "La estura de : ".$this->Nombre." es ".$this->Altura." centimentros";
  	

  }

}
//crear el objeto
$per1 = new Persona();
$per1->inicial('Nelson',1.75);
echo "<br>";
$per1->caminar();
echo "<br>";
echo "Segundo objeto";
echo "<br>";
$per2 = new Persona();
$per2->inicial("Sebastian Mora",1.80);

echo "<br>";
$per2->estatura();

?>