<?php
	
$name = "Teste";

function teste(){
	
	$nome = "Teste1.0";
	//ele não entende, no PHP a variavel tem que estar dentro do escopo desejado
	global $name;
	echo $nome;
	
}

function teste2(){
	$nome = ".:: Teste2 ::.";
	echo $nome."agora no teste2";
}

teste();

teste2();

?>