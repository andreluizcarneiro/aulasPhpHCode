<?php

$nome = (int)$_GET["a"];

//var_dump($nome);

//pega informações do Ambiente não só do servidor
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;
?>