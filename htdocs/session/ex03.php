<?php
session_start();
$_SESSION['nome']='Walisson Rodrigues Ferraz';
echo session_id();
session_destroy();

?>