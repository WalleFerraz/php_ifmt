<?php

/*
    Faça um programa em PHP que analise a média arimética 
    entre duas notas e verifique se for maior ou igual a 6
     está aprovado. Caso constrário, está em recuperação.

*/
$n1=2.0;
$n2=7.5;
$media= ($n1+$n2)/2;    

echo ($media>=6)?'aprovado':'recuperação';//comparação lógica ? se for verdade: se falso.Ternário

?>