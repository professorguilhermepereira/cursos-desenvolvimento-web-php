<?php
header("Content-type: text/html; charset=utf-8");

// String : texto
// Numero
// > Integer : 1
// > Double: 1.7
// Boolean : true/false
$texto = "texto";
$inteiro = 1; 
$double = 1.7;
$booleana = true;
$surpresa;// undefined => null

$nu; $nd; $nn;


echo $texto . ": " . gettype($texto) . "<br /><br />";

echo $inteiro . ": " . gettype($inteiro) . "<br />";
echo $double . ": " . gettype($double) . "<br /><br />";

echo $booleana . ": " . gettype($booleana) . "<br />";

echo gettype($surpresa) . "<br />";