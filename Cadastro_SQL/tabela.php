<!DOCTYPE html>
<html>
<head>
<body>
	<h3 style="text-align: center;">Relatório</h3>
	<?php 

	include_once("conexao.php");
//preparando a consulta SQL
	$sql="SELECT * FROM alunos";
	$result=$conexao->query($sql);

	if($result->num_rows >0)
	{
		//iterar cada linha de saida da consulta
		//$result->fetch_assoc() transforma a uma linha da saida em um array associativo
		echo "<table border='1'>";
		echo "<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Idade</th>
		<th>Tel</th>
		<th>E-mail</th>
		<th>Cidade</th>
		</tr>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>
			<td>".$row['id']."</td>
			<td>".$row['nome']."</td>
			<td>".$row['idade']."</td>
			<td>".$row['tel']."</td>
			<td>".$row['email']."</td>
			<td>".$row['cidade']."</td>
			</tr>
			"; 

		}
	}

	?>
</body>
</html>