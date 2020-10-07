<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resumo da compra</title>
	<link rel="stylesheet" type="text/css" href="resumocss.css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	
</head>
<body>
	<h1>LH  Guitars & Guitars</h1>
	<h1>Resumo da compra</h1>
	<?php 
	session_start();
	if ($_SESSION['lg']==false) {
		$_SESSION['lg']=false;
		header("Location: erro.html");

	}
	else
	{
		$valor['p1']=0;
		$valor['p2']=0;
		$valor['p3']=0;
		$valor['p4']=0;
		$valor['p5']=0;


		$quantidade['produto1'] = $_POST['produto1'];
		$quantidade['produto2'] = $_POST['produto2'];
		$quantidade['produto3'] = $_POST['produto3'];
		$quantidade['produto4'] = $_POST['produto4'];
		$quantidade['produto5'] = $_POST['produto5'];

		$opc['opc'] = $_POST['opc'];
		?>
		<br><table border='1'align='center' style="width: 1000px;">
			<tr style="background-color: rgb(169,169,169);">
				<td class="top">Produto</td>
				<td class="top">Quantidade do produto</td>
				<td class="top">Valor unitário</td>
				<td class="top">Preço total do item</td>
			</tr>
			<tr>
				<?php 
				if ($quantidade['produto1'] !="" || $quantidade['produto1'] >0) 
				{
					$valor['p1']=$quantidade['produto1']*12500;
					?>
					<td>Violão elétrico Nylon Takamine tc 123sc LH</td>
					<td><?php echo "".$quantidade['produto1'];?></td>
					<td>R$ 12.400,00</td>
					<td><?php  echo "R$ ".$valor['p1'];?></td>
				<?php } ?>
			</tr>
			<tr>
				<?php 
				if ($quantidade['produto2'] !="" || $quantidade['produto2'] >0) 
				{
					$valor['p2']=$quantidade['produto2']*3900;
					?>
					<td>Violão elétrico acústico Yamaha APX700II</td>
					<td><?php echo "".$quantidade['produto2'];?></td>
					<td>R$ 2.900,00</td>
					<td><?php  echo "R$ ".$valor['p2'];?></td>
				<?php } ?>	
			</tr>
			<tr>
				<?php 
				if ($quantidade['produto3'] !="" || $quantidade['produto3'] >0) 
				{
					$valor['p3']=$quantidade['produto3']*790;
					?>
					<td>Violão Strinberg Folk Aço Af-65lh Bk Preto</td>
					<td><?php echo "".$quantidade['produto3'];?></td>
					<td>R$ 780,00</td>
					<td><?php  echo "R$ ".$valor['p3'];?></td>
				<?php } ?>
			</tr>
			<tr>
				<?php 
				if ($quantidade['produto4'] !="" || $quantidade['produto4'] >0) 
				{
					$valor['p4']=$quantidade['produto4']*6600;
					?>
					<td>Guitarra Fender - Player Telecaster LH</td>
					<td><?php echo "".$quantidade['produto4'];?></td>
					<td>R$ 6.600,00</td>
					<td><?php  echo "R$ ".$valor['p4'];?></td>
				<?php } ?>
			</tr>
			<tr>
				<?php 
				if ($quantidade['produto5'] !="" || $quantidade['produto5'] >0) 
				{
					$valor['p5']=$quantidade['produto5']*2500;
					?>
					<td>Guitarra Vintage LV 100 AFD Paradise LH</td>
					<td><?php echo "".$quantidade['produto5'];?></td>
					<td>R$ 2.500,00</td>
					<td><?php  echo "R$ ".$valor['p5'];?></td>
				<?php } ?>
			</tr>
		</table>
		
		<?php
	}
	?>
	<h2>
		<?php
		$total=$valor['p1']+$valor['p2']+$valor['p3']+$valor['p4']+$valor['p5'];
		if ($opc['opc']=='normal') {
			echo "<br>Encomenda normal 10 dias úteis → R$ 30,00";
			$total+=20;
		}
		if($opc['opc']=='expressa'){
			echo "<br>Encomenda expressa 04 dias úteis → R$ 60,00";
			$total+=50;
		}
		echo "<br>Valor total do pedido: R$ ".$total;
		?>
	</h2>


</body>
</html>