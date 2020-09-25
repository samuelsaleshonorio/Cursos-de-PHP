<?php
include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Iceland&display=swap" rel="stylesheet">
    <style type="text/css">
        body{ 
            background: rgb(0,77,154); 
            text-align: center;
            color:rgb(248,72,50);
            font-family: 'Iceland', cursive;
        }

        h1{
            color:rgb(239,205,0);
            text-align: center;
        }
        p{
            color: white;
            text-align: center;
        }

    </style>
    <meta charset="utf-8">
    <title>INSCRIÇÃO DE COMPETIDORES</title>
</head>

<body>

   <h1>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</h1>
   <p align="center"><img src="logo.png"></p>
   <form action="script.php" method="post">
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>Sua idade: <input type="text" name="idade" /></p>
    <p><input style="font-family: 'Iceland', cursive;" type="submit" value="Enviar dados"/></p>
    <?php
    $mensagemDeSucesso = obterMensagemSucesso();
    if(!empty($mensagemDeSucesso))
    {
        echo $mensagemDeSucesso;
    }

    $mensagemDeErro = obterMensagemErro();
    if(!empty($mensagemDeErro))
    {
        echo $mensagemDeErro;
    }
    ?>
</form>

</body>

</html>