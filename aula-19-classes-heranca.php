<?php
/**
 * HERANÇA: o que você herdou?
 * > Genética: características fisicas => propriedades
 * > Costumes: Comportamentos => métodos
 * 
 * classes: calculadora, calculadora cientifica, calculadora de juros
 * > pai: calculadora
 * > filho: calculadora cientifica, calculadora de juros
 */
// include: arquivos nao primordias/fundamentais
// require: arquivo e extremamente necessario
require_once("class/Calculadora.class.php");
//require_once("class/Calculadora_De_Juros.class.php");

$calculadora = new Calculadora();
$calculadora->mostra_adicao(3, 4);
$calculadora->bt_adicao;
/*
$calculadora_de_juros = new Calculadora_De_Juros();
$calculadora_de_juros->mostra_adicao(10,10);
*/