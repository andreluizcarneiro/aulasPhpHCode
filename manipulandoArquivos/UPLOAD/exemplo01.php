<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">

	<button type="submit">Send</button>
</form>

<?php

//guarda a solicitação POST 
if($_SERVER["REQUEST_METHOD"] === "POST"){

	//recuperar arquivo	
	$file = $_FILES["fileUpload"];
	if($file["error"]) {
		//force um erro no PHP - podemos tratar isso
		throw new Exception("Error: " .$file["error"]);	
	}
	
	//se caso n tivesse erro
	$dirUploads = "uploads";
	if(!is_dir($dirUploads)){
		mkdir($dirUploads); //mkdir ja da a permissão de escrita
	}
	
	//para ver se o upload aconteceu ou nao
	if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
		echo "UPLOAD realizado com sucesso!";
	} else{
		throw new Exception("Não foi possível realizar o Upload.");
	}
}


?>