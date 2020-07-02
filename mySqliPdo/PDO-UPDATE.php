<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "alvaro";
$password = "qwerty";
$id = 2;

//usando pra cada parametro que temos.
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Atualizados com sucesso!"; 

?>