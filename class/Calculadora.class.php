<?php
/**
 * @author Guilherme F. F. Pereira <contato@queroempreendermuito.com.br>
 * @email contato@queroempreendermuito.com.br
 * @link http://queroempreendermuito.com.br
 * @copyright Copyright © Todos os Direitos reservado a Guilherme F. F. Pereira
 * @version 1.0.0
 * Description Calculadora: 
 */
class Calculadora {
   
   public $bt_adicao;
   public $bt_subtracao;
   public $bt_multiplicacao, $bt_divisao;
   public $teclado_numerico;
   public $bt_ac, $bt_liga_desliga;
   public $largura, $altura, $comprimento, $peso;
   
   public function adicao($a, $b) {
      return $a + $b;
   }
   public function mostra_adicao($a, $b) {
      echo "{$a} + {$b} = " . $this->adicao($a, $b) . '<br/>';
   }
}