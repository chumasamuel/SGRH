<?php
   include_once("conexao.php");

   $nome=$_POST['nome'];
   $genero=$_POST['email'];
   $telefone=$_POST['telefone'];
  

    $sql="INSERT INTO usuarios (nome, email, telefone, senha)
            VALUES ('$nome', '$email', '$telefone', '$senha')";
    if(mysqli_query($conexao, $sql)){
        echo "usuario castrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
    ?>