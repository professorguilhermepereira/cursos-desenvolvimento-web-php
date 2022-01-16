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
foreach($linguagens as $linguagem_nome => $linguagem_valor) {
   echo $linguagem_nome . ": " . $linguagem_valor . '<br />';
}
/*for($j = 0; $j < count($linguagens); $j++) {
   echo $linguagens[$j] . '<br/>';
}*/

/*
$animal = array(
    "nome" => "Toto",
    "idade" => 4,
    "endereço" => "Brasil",
    "especie" => "cachorro",
    "cor" => "caramelo"
);

$idioma = array(
    "caracteres" => '26',
    "primeira_letra" => 'a',
    "ultima_letra" =>  'z',
    "nome" => "portugues brasileiro",
    0 => 'Brasil'
);

foreach( $idioma as $idioma_indice => $idioma_valor) {
   echo $idioma_indice . ": " . $idioma_valor . '<br/>';
}


foreach( $animal as $dado_indice => $dado_valor ) {
   echo $dado_indice . ": " . $dado_valor . '<br/>';
}

*/











