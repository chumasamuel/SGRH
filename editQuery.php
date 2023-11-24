<?php
	include_once("conexao.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
		$id	= $_POST['id'];
		$name= $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$senha = $_POST['senha'];

	//Edita  dados digitado no formulário
		$query = mysqli_query($conexao, "UPDATE usuarios SET nome = '$nome', email = '$email'   telefone = '$telefone', WHERE id = '$id' ");

	
	//menssagem
	header("location: editMsg.php");
?>