<?php
/**
 * CLASSES E OBJETOS
 * Classe: a Forma, a Receita, a Planta
 * Objeto: o Bolo, o Doce, a Casa
 * 
 * Propriedades === variaveis
 * Metodos === funçoes
 * 
 * Qual o nivel de acesso a esta propriedade/metodo
 */
class Casa {
   public $quartos;
   public $salas;
   public $cosinhas;
   public $banheiros;
   
   public function __construct($quartos, $salas, $cosinhas, $banheiros) {
      $this->quartos = $quartos;
      $this->salas = $salas;
      $this->cosinhas = $cosinhas;
      $this->banheiros = $banheiros;
   }
   
   public function tem_na_casa() {
      return $this->quartos . ' quartos, ' . $this->salas . ' salas, ' . $this->cosinhas . ' cosinha, ' . $this->banheiros . ' banheiros<br/>';
   }
}
$casa = new Casa(2,2,1,2);
echo $casa->quartos . ' quartos<br/>';
echo $casa->salas . ' salas<br/>';
echo $casa->cosinhas . ' cosinha<br/>';
echo $casa->banheiros . ' banheiros<br/>';
echo $casa->tem_na_casa();











