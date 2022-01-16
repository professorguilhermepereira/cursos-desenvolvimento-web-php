<?php
$num = 1;

while ($num <= 100) {
    echo $num . ' x 1 = ' .  (1*$num) . '<br />';
    $num++;
}

for($j = 10; $j >= 0; $j -= 1) {
    echo $j . ' x 1 = ' .  (1*$j) . '<br />';
}

$numero = 100;
do {
   echo $numero . ' x 1 = ' .  (1*$numero) . '<br />';
   $numero++;
} while($numero <= 10);