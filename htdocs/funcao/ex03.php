<?php
    function soma($a,$b) { // O php é uma linguagem fracamente tipada. Não precisa especificar qual é o tipo de lado.
        return $a+$b;
    }//soma

    function soma2(int ...$valores) {//parametros de tipos escalares
        return array_sum($valores);
    }//soma2

    function soma3(int ...$val):string {//Vai somar e apresentar o resultado em string.
        return array_sum($val);
    }
    echo soma(5,10). '<br>';
    echo soma(1.5,5.8).'<br>';
    echo soma2(3,23,121,34,543).'<br>';//Posso usar quantos parametros eu quiser.
    var_dump(soma3(30,30)).'<br>';//Me retornou como uma string
?>