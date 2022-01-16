<?php
/**
 * LINGUAGENS WEB
 * Html5, Css3, Javascript, Php, MySQL
 */
$linguagem1 = 'Html5';
$linguagem2 = 'Css3';
$linguagem3 = 'Javascript';
$linguagem4 = 'Php';
$linguagem5 = 'MySQL';

$linguagens = array("Html5",'Css3',"Javascript",'Php','MySQL');

//var_dump($linguagens);
echo 'O tamanho do meu array e: ' . count($linguagens) . '<br/>';
for($j = 0; $j < count($linguagens); $j++) {
   echo $linguagens[$j] . '<br/>';
}







