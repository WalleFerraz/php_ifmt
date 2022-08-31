<?php
/*
$variavel - é uma parte criada na memória RAM do servidor WEB (apache-XAMPP) que mantem ativa apenas se for incluída em outra página ou enviada via URL.
Ex.: ex01.php?a=5
"a" é um parâmetro e não uma variável

Session - quando o usuário acessar a página, uma sessão é criada na memória RAM do servidor, ficando ativa por 30 min. Por padrão no PHP, uma session não é iniciada.
*/    

session_start(); //Tenho que inicializar a session antes de dar um valor para ela.
$_SESSION['b'] = 'Walisson Rodrigues';// O 'b' é uma variável.
$_SESSION['x'] = 100;
echo $_SESSION['b'];

session_destroy();//Remove a session (alocação na memória RAM).
session_unset();//Matando a session. Todas as variáveis na session serão removidas.

?>