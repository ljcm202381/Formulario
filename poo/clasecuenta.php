<?php

class Cuenta
{

   //Propiedades
	private $Saldo = 0;
	private $NuCuenta;
	private $Propietario;
	private $Password;

//definir constructor

	public function __construct($saldo,$cuenta,$propietario,$contrasena)
	{

		$this->Saldo=$saldo;
		$this->NuCuenta=$cuenta;
		$this->Propietario=$propietario;
		$this->Password=$contrasena;

	}

	public function deposito($valordeposito)
	{
		$this->Saldo += $valordeposito;
	}

	public function consultasaldo()
	{
		return $this->Saldo;
		
	}

	public function retiro($vretiro)
	{
		if($vretiro < $this->Saldo)
		{
			echo "Retiro en proceso";
			$this->Saldo -= $vretiro;
            echo "<br>";
			echo "Su nuevo saldo es: ".$this->Saldo;
		}
		else 
		{
			echo "Tiene fondos insuficientes";
		}
	}

	public function validarcuenta($propietario,$contrasena)
	{
		if($this->Propietario == $propietario && $this->Password==$contrasena)
		{

			echo '<script>alert("El usuario tiene una cuenta activa");window.location.href="principal.php";</script>';
		}
		else 
		{
			echo '<script>alert("Validar los datos de ingreso");window.location.href="ingreso.php";</script>';
		}


	}







}




?>