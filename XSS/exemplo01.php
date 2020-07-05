<form method="post">

	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php

$_POST['busca'] = '<script>alert("ok")</script>';
if(isset($_POST['busca'])){
	echo $_POST['busca'];
}


?>