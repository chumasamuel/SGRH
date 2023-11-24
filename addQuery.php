<?php
	include_once("db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
		$name= $_POST['name'];
		$email = $_POST['email'];
		
		$telefone = $_POST['telefone'];
		$password = $_POST['senha'];
		
		


	//cadastra  dados digitado no formulário
		$query = mysqli_query($conectar,  "INSERT INTO usuarios (name) VALUES ('$name')");
	
	//Rediriciona para a pagina com a menssagem de sucesso
		header("location: addMsg.php");
?>