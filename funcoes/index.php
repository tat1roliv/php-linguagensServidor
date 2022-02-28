<?php

echo '<p><strong><u>Parâmetros por valor versus parâmetros por referência</u></strong></p>';


$idade = 20;
function modifica($a){
    echo 'Internamente (antes): ' . $a . '<br>';
    $a = 100;
    echo 'Internamente (depois): ' . $a . '<br>';
}

echo $idade . ' antes funcao  <br>';
modifica($idade);
echo $idade. ' apos funcao (ainda permanece com o valor inicialmente atribuido -> modifica o valor apenas dentro da funcao) <br>';

echo '</br>' .'</br>' ;

$variavelTeste = 20;
function modificaComReferencia(&$a){
    echo 'Internamente (antes): ' . $a . '<br>';
    $a = 100;
    echo 'Internamente (depois): ' . $a . '<br>';
}

echo $variavelTeste . ' antes funcao  <br>';
modificaComReferencia($variavelTeste);
echo $variavelTeste. ' apos funcao (funcao recebe parametro como referencia => funcao(&$param)) <br>';

echo '</br>' .'</br>' ;
echo '<p><strong><u>Funções recursivas</u></strong></p>';

function fatorial($n){
    if($n == 0) {
    return 1;	} else {
        return $n * fatorial($n - 1);
        }
    }
    
echo 'O fatorial de 5 é ' . fatorial(5);


echo '</br>' .'</br>' ;
echo '<p><strong><u>Funções anônimas</u></strong></p>';

$dobro = function ($x){
	return $x * 2;
};
echo $dobro(5); 