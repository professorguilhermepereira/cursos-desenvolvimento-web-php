<?php
/* 
    OPERADORES LÓGICOS
    &&  : E lógico
    ||  : Ou lógico
*/
$idade = 25;
if( $idade >= 18 && $idade < 24 ) {
  // true        && false
    echo "Sim! E maior de 18";
} else {
    echo "A idade da pessoa esta fora";
}