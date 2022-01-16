<?php
/**
 * FUNÇÕES NO PHP
 * function nome(argumentos) {ações}
 */
/*function imprimir_na_tela() {
   //Tudo que deve ser feito deve ser colocado entre as chaves!
   echo '<h1>Minha Funçao no PHP!</h1>';
}
imprimir_na_tela();*/

function imagem($src) {
   echo "<img src='{$src}' style='float:left; width:300px; height:210px; margin:10px; border:10px solid rgba(241,241,241,1); box-shadow:0 0 10px 0 rgba(0,0,0,1);'/>";
}
imagem('http://cursosguilherme.com.br/wp-content/uploads/2018/07/como-hospedar-um-site-hostgator-hospedagem-de-sites-website-blog-loja-virtual-ecommerce-e-commerce-e1531311742499-300x198.jpg');
imagem('http://cursosguilherme.com.br/wp-content/uploads/2018/09/Curso_Html5_Aula_02_Como_Criar_Titulos-768x432.jpg');

