<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="logo">
                👤
            </div>
            <h1>Criar Conta</h1>
            <p class="substituto">Preencha seus dados para se cadastrar.</p>
            <form action="cadastrar.php" method="POST">
                <div class="campo">
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="campo">
                    <label for="nome">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="campo">
                    <label for="nome">Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="btn-login">Criar conta</button>
            </form>
            <p class="cadastro-link">Já possui uma conta?
            <a href="index.php">fazer login</a></p>
        </div>
    </div>
</body>
</html>