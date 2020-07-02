<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$id = 1;

//usando pra cada parametro que temos.
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado com sucesso!"; 

?>