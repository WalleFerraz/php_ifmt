<?php
/*
    Simular uma inclusão de item em um carrinho de compra.
    1 - Criar uma estrutura de carriho de compra (vetor);
    2 - Selecionar apenas o ID e a quantidade do produto;
    3 - Ordenar pela ordem de inserção.
*/
session_start();
$item = array();
array_push($item,array(
    'id'=>01,
    'des'=>'Teclado',
    'preco'=>129.99,
    'qtd'=>05,
    'subtotal'=>129.99*05
));

$_SESSION['carrinho'] = $item;

/*Adicionar um novo item no carrinho;
session_start();
$item = $_SESSION['carrinho'];
array_push($item,array(
    'id'=>01,
    'qtd'=>05
));
$_SESSION['carrinho'] = $item;
*/
?>