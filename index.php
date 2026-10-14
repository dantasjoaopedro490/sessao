<?php
session_start();
if(isset($_SESSION["usuario"])){
    header("Location: painel.php");
}
 
?>
 
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema PHP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <?php
            if(isset($_SESSION["mensagem"])){
                echo $_SESSION["mensagem"];
                unset($_SESSION["mensagem"]);
            }
            ?>
            <div class="logo">
                🔐

            </div>
            <h1>
                Bem - Vindo!
            </h1>
            <p>Entre com seus dados para acessar o sistema.</p>
            <form action="autenticar.php" method="POST">
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email"
                    placeholder="Digite seu email" required>
 
                </div>
 
                <div class="campo">
                    <label for="senha">
                        Senha
                    </label>
                    <input type="password" id="senha" name="senha"
                    placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="btn-login">
                    Entrar
                </button>
 
            </form>
            <p class="cadastro-link">
                Ainda nao possui uma conta?
           
            <a href="cadastro.php">
                Criar cadastro
            </a>
            </p>
 
 
        </div>
 
    </div>
   
</body>
</html>
 