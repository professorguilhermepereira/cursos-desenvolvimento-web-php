<?php
// =   : OPERADOR DE ATRIBUIÇAO
//$valor = 'texto';
/* OPERADORES DE COMPARAÇÃO: ?
    ==  : Igualdade
    !=  : Diferença
    >   : Maior
    <   : Menor
    >=  : Maior ou igual
    <=  : Menor ou igual
    === : Igualdade entre tipos de variaveis/constante (valores)
    !== : Diferença entre tipos de variaveis/constante (valores)
 */
/*
 * falso e desligado ou 0 (zero)
 * verdadeiro e ligado ou 1 (um)
true: boolean => String = 1 )
false: boolean => String = '' (vazio)
*/
// ?: true (verdadeiro) ou false (falso)
// (true) => (1), (false) => ''
$numero1 = 4;
$numero2 = '4';

$informaçao = ($numero1 !== $numero2);
echo "O resultado da operaçao e: " . $informaçao . ".<br />";
echo gettype($numero1) . '<br />';
echo gettype($numero2) . '<br />';








