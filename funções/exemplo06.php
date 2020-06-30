<?php

function soma(float ...$valores):float {
		
	return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5,3.2);
echo "<br>";

function soma2(int ...$valores):int {
		
	return array_sum($valores);
}

echo var_dump(soma2(2,2));
echo "<br>";
echo soma2(25,33);
echo "<br>";
echo soma2(1.5,3.2);
echo "<br>";

function soma3(int ...$valores):string {
		
	return array_sum($valores);
}

echo var_dump(soma3(2,2));
echo "<br>";
echo soma3(25,33);
echo "<br>";
echo soma3(1.5,3.2);
echo "<br>";


?>