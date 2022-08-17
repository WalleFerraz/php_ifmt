<?php
/*
    Faça um programa PHP que analise uma idade distintas  
    classifique de acordo com a informação abaixo: 
        -até 12 anos: criança
        -acima de 12 anos e menor que 18:adolescente
        -de 18 anos até 50: adulto
        -acima de 50 anos:idoso

*/

$idade=12;

if($idade<12)
        echo 'criança';
else if($idade>=12 && $idade<18)
        echo 'adolescente';
else if($idade>=18 && $idade<=50)
        echo 'adulto';
else
        echo 'idoso';


?>