(<?php
/*
Faça um vetor com 5 siglas de estado brasileiro aleatórios e cadastre 2 novos
*/

$estado = ['GO','MS','MT'];
$estado [] = 'SP';//incluir um novo elemento no final do vetor
//$estado ['SP']; sobrescreve o vetor
array_push($estado,'RJ');//incluir um novo elemento no final do vetor
array_unshift($estado,'PR');//adicionar um novo elemento no início do vetor
array_shift($estado);//remove o primeiro e tornar o segundo no seu lugar
array_pop($estado);//remover o último elemento e seu índice

echo '<pre>';
    print_r($estado);
echo '</pre>';

$meninos = ['joao','mario'];
$meninas = ['maria','joana'];

$alunos = array_merge($meninas,$meninos);
echo '<pre>';
    print_r($alunos);
echo '</pre>';

?>