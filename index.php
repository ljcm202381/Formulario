<!DOCTYPE html>
<head>
<title>Captura</title>

</head>
<body>
 <!--   <form action="funcion.php" method="post">
    <input type="text" name="txtnombre" placeholder="Ingrese su nombre">
    <br>
    <input type="number" name="txtedad" placeholder="Ingrese su edad">
    <br>
    <input type="submit" name="registrar"value="Registrar">
-->

<form action="" method="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="txtcolor">

<input type="submit" name="" value="Ingresar">


</form>
</body>

</html>
<?php
if(isset($_POST['submit']))
{
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
}}

?>