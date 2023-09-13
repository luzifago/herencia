<?php
require_once ("classPersona.php");
require_once ("classEmpleado.php");
require_once ("classCliente.php");

$objEmpleado = new Empleado(23,"Jeo",33);
$objEmpleado->setPuesto("Administrador");
echo $objEmpleado->getDatosPersonales();
echo "<br>";
echo "Puesto: ".$objEmpleado->getPuesto();

$objEmpleado = new Empleado(15,"Sirley",28);
$objEmpleado->setPuesto("Asistente");
echo $objEmpleado->getDatosPersonales();
echo "<br>";
echo "Puesto: ".$objEmpleado->getPuesto();

