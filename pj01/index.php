<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="refresh" content="1"> -->
	<title>Pj-01- Primeiro codigo em PHP</title>
	<?php date_default_timezone_set('America/Sao_Paulo')?>
</head>
<body style="text-align: center;">
	<h1><?php echo "Hoje é dia: <br> ".date('d/m/Y \à\s H:i:s'); ?></h1>
	<!-- <p> 
		<?php 
		$num1=10;
		$num2=100;
		$total=$num1+$num2;
		echo "O resultado da soma de ".$num1." com ".$num2." é: ".$total;
		?>
	</p> -->
	<p>
		<?php 
			$p1=20;
			$p2=30;

			$soma=$p1+$p2;
			$subt=$p1-$p2;	
			$mult=$p1*$p2;
			$divi=$p1/$p2;
			$expo=$p1^$p2;
			$modu=$p1%$p2;

			echo "p1=20 e p2=30 <br><br>";
			echo "Os operadores do PHP são: <br>";
			echo "<br>+ soma: ".$soma; 
			echo "<br>- subtração: ".$subt; 
			echo "<br>* multiplicação: ".$mult; 
			echo "<br>/ divisão: ".$divi; 
			echo "<br>^ exponenciação: ".$expo; 
			echo "<br>% módulo, resto da divisão: ".$modu; 
			echo "<br>++ acrescenta um a uma variável: ".$p1++;
			echo "<br>-- subtrai um de uma variável: ".$p2--;
			echo "<br>+= soma um valor a uma variável e lhe atribui o resultado: ".$p1+=$p2;
			?>
	</p>

</body>
</html>