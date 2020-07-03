<?php

try{

	throw new Exception("ERRO", 1);
	
/*
	a excessão é quase um erro fatal
*/
} catch(Exception $e){

	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
			
	));

}


?>