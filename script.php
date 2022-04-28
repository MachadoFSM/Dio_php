<?php
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);
/*
* Ajuste adicionado para retornar ao index | header(string: 'location: index.php') para header('Location: index.php') |
*/
header('Location: index.php'); 
