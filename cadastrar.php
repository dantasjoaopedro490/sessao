<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$_SESSION["cadastro"]=[
    "nome"=>$nome,
    "email"=>$email,
    "senha"=>$senha,
];

$_SESSION["mensagem"] = "Cadastro realizado com sucesso!";

header("Location:index.php");
exit;
?>