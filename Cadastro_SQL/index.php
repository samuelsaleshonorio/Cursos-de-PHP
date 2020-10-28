<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Escola BD</title>
	<style type="text/css">
	table{
		text-align: center;
		margin: 0 auto;
	}
	tr:nth-child(even){
		background-color: rgb(0,125,255);
	}
	input[type=text] {
		width: 100%;
		padding: 8px 20px;
		margin: 1px;
		box-sizing: border-box;
		border: none;
		border-bottom: 2px solid rgb(0,125,255);
	}
	input[type=number] {
		width: 100%;
		padding: 8px 20px;
		margin: 1px;
		box-sizing: border-box;
		border: none;
		border-bottom: 2px solid rgb(0,125,255);
	}
	input[type=submit] {
		border-radius: 5px;
		border: 3px solid rgb(0,125,255);
		background-color: #fff;
		color: black;
		height: 30px;
		width: 140px;
	}
</style>
</head>
<body>
	<form name="form" class="formualrio" action="processa.php" method="post">
		<h3 style="text-align: center;">Digite seus dados</h3> 
		<h5 style="text-align: justify;">
			Nome:     <input type="text" name="nome"><br>
			Idade:    <input type="text" name="idade"><br>
			Telefone: <input type="text" name="tel"><br>
			Email: 	  <input type="text" name="email"><br>
			Cidade:   <input type="text" name="cidade"><br>
		</h5>
		<input type="submit" name="btnEnviar" value="Enviar">
	</form>
</body>
</html>