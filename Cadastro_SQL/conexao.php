<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="escola";

	//criando a conexão

$conexao=new mysqli($servername,$username,$password,$dbname);

	//definindo a codificação de caracteres
$conexao->set_charset("utf8");

	//verifindo a conexão
if ($conexao->connect_error) {

	die("Conexão falhou :". $conexao->connect_error);
}
?>