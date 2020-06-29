<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

//pega o que tem antes da palavra mãe
$texto = substr($frase, 0, $q);

var_dump($texto);

echo "<br>";

var_dump($q);

echo "<br>";

//pega depois a partir da posição 19.
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);
?>