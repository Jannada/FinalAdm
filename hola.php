<?php

require 'class.Address.inc';
$direccion = new Direccion;

echo '<h2>Direccion vacia</h2>';
echo '<pre>' .var_export($direccion, TRUE). '</pre>';
echo '<h2> Estableciendo propiedades</h2>';

$direccion->calle_direccion_1 = '555 calle falsa';
$direccion->ciudad_nombre = 'Caracas';
$direccion->subdivision_nombre = 'Estado';
$direccion->codigo_postal = '1234';
$direccion-> nombre_pais = 'Venezuela';

echo '<pre>' .var_export($direccion, TRUE). '</pre>';
echo '<h2> Mostrando dirección</h2>';

echo $direccion->display();
$var = 3;
$var1 = 'hola';
$var2 = 3;

echo "</br> qw{$var}rty </br> ";

echo "{$var}{$var1}{$var2}";

$a = 3;
$b = &$a;



?>
