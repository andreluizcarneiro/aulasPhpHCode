<?php

function ola($texto = "mundo"){
	return "Olá $texto!<br>";
}
//interpolação de variáveis
echo ola();
echo ola("");
echo ola("Teste");
echo ola("Zeus");

?>