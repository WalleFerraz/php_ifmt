<?php
/*
    Operações lógicas: comparações de valores
    maior, menor, igual, diferente etc.


*/
$a=5.0;
$b=1;

echo '$a é maior que $b?'. '<br>';
var_dump ($a>$b); //$a é maior que $b?

echo '$a não é menor que $b?'. '<br>';
var_dump ($a<$b); //$a não é menor que $b?

echo '$a não é igual a $b?'. '<br>';
var_dump ($a==$b); //$a não é igual a $b?

echo 'o tipo de dado da $a é igual ao tipo de dado da $b?'. '<br>';
var_dump ($a===$b); //o tipo de dado da $a é igual ao tipo de dado da $b?

echo '$a é difente de $b'.'<br>';
var_dump ($a!=$b); //$a é difente de $b?

echo 'o tipo de dado da $a é diferente do tipo de dado da $b?'.'<br>';
var_dump ($a!==$b); // o tipo de dado da $a é diferente do tipo de dado da $b?

echo '$a é maior ou igual a $b?'.'<br>';
var_dump ($a>=$b); //$a é maior ou igual a $b?


?>