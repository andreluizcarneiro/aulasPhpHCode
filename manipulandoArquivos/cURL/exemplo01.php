<?php

try{
	throw new Exception("Houve um erro", 400);
	/*numero pode ser utilizado para se localizar, 
	no caso por ser 400, daria tal erro e assim por diante*/
} catch(Exception $e){
	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()

	));	
}
?>