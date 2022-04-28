<?php 
/*
*_ Trabalho curso de PHP Digital innovation one  _*
*_ wampserver v: 3.2.3 / PHP Version 7.3.21      _*

Crie um projeto em PHP para uma competição de natação, o sistema
deverá permitir a inserção de competidores com seu nome e idade,
e o sistema deverá identificar em qual categoria o nadador irá 
competir, por exemplo, 6 à 12 anos categoria infaltil, de 13 à 18
categoria adolescente, acima de 18 categoria adulto, o sistema 
deverá retornar a categoria para cada nadador que for cadastrado. 
*/

    include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscrição</title>
</head>
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
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
        <p>Seu nome: <input type="text" name="nome" /> </p>
        <p>Sua idade: <input type="text" name="idade"/> </p>
        <p><input type="submit" /> </p>
    </form>
    
</body>
</html>