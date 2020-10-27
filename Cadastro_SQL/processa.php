<?php 
include_once("conexao.php");

	//preparando a inclusão SQL

	$nome		=	$_POST['nome'];
	$idade		=	$_POST['idade'];
	$tel		=	$_POST['tel'];
	$email		=	$_POST['email'];
	$cidade		=	$_POST['cidade'];

	$string_sql = "INSERT INTO alunos(nome, idade, tel, email, cidade) VALUES ('$nome', '$idade', '$tel', '$email', '$cidade')";

	if (mysqli_query($conexao,$string_sql)) {
		echo "Gravado com sucesso";
	}
	else{
		echo "Error: ".$string_sql. "<br>" . mysqli_error($conexao);
	}
	mysqli_close($conexao);
	header("Location: tabela.php");
	?>