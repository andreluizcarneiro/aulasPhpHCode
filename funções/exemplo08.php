<?php 

//normalmente utilizado em Processos Lentos, quando n sabe quando ira terminar.
function teste($callback){
	//Processo Lento

	$callback();

}

teste(function(){

	echo "Terminou!";

});

?>