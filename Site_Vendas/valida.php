<?php 
$dados['usuario'] = $_POST['usuario'];
$dados['senha'] = $_POST['senha'];
session_start();
$_SESSION['lg']=false;

if ($dados['usuario'] !='' || $dados['senha'] != '') {
	
	if ($dados['usuario'] == 'admin' && $dados['senha'] == 'admin123') {
		header("Location: compra.html");
		
		$_SESSION['lg']=true;
		
	}
	else{
		header("Location: erro.html");
		$_SESSION['lg']=false;
	}
}

?>