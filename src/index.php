<?php
require_once dirname(__FILE__) . '/funcoes.php'; 

$funcoes = new SRC\Funcoes();

$seculo = $funcoes->SeculoAno(1905);

$primoAnterior = $funcoes->PrimoAnterior(29);

$segundoMaior = $funcoes->SegundoMaior(array(10,5,1));

$sequenciaCrescente = $funcoes->SequenciaCrescente([3, 6, 5, 8, 10, 20, 15]);

echo("Teste 1 -Seculo: " . $seculo  ."<br />" );
echo("Teste 2 - Primo Anterior: " . $primoAnterior ."<br />" );
echo("Teste 3 - Segundo maior: " . $segundoMaior ."<br />" );
echo("Teste 4 - Sequencia Crescente: " .$sequenciaCrescente ."<br />" );
?>