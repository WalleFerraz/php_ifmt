<?php
/*
    Regras de laços de repetição:
    -definir um valor inicial (inteiro);
    -valor de parada do laço (inteiro);
    -determinar a forma de incremento ou decremento do laço;

    Ex. Faça uma tabuada em PHP com oum número informado de zero
    a 10. Use o seguinte formado:
        4
        4 x 0 = 0;
        4 x 1 = 4;
        ...

*/

$n=5;

for($i=0;$i<=10;++$i)
        echo $n. ' x '. $i. ' = '. $n*$i. '<br>';

?>