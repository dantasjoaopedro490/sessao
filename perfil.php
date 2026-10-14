<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location:index.php");
    exit;
}
?>

>
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
 
    <meta charset="UTF-8">
 
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
 
    <title>Meu Perfil</title>
 
    <link
        rel="stylesheet"
        href="css/style.css"
    >
 
</head>
 
<body>
 
 
    <!-- MENU -->
 
    <header class="topo">
 
        <div class="logo-menu">
            🔐 Sistema PHP
        </div>
 
 
        <nav>
 
            <a href="painel.php">
                Início
            </a>
 
            <a href="perfil.php">
                Perfil
            </a>
 
            <a
                href="logout.php"
                class="btn-sair"
            >
                Sair
            </a>
 
        </nav>
 
    </header>
 
 
    <!-- PERFIL -->
 
    <main class="perfil-container">
 
        <div class="perfil-card">
 
 
            <!-- Avatar -->
 
            <div class="avatar">
                👤
            </div>
 
 
            <!-- Nome -->
 
            <h1>
 
                <?php
 
                echo $_SESSION["usuario"];
 
                ?>
 
            </h1>
 
 
            <!-- Tipo -->
 
            <p class="tipo">
 
                Tipo de usuário:
 
                <strong>
 
                    <?php
 
                    echo $_SESSION["tipo"];
 
                    ?>
 
                </strong>
 
            </p>
 
 
            <!-- Nome -->
 
            <div class="informacao">
 
                <span>
                    Nome
                </span>
 
                <strong>
 
                    <?php
 
                    echo $_SESSION["usuario"];
 
                    ?>
 
                </strong>
 
            </div>
 
 
            <!-- E-mail -->
 
            <div class="informacao">
 
                <span>
                    E-mail
                </span>
 
                <strong>
 
                    <?php
 
                    echo $_SESSION["email"];
 
                    ?>
 
                </strong>
 
            </div>
 
 
            <!-- Tipo -->
 
            <div class="informacao">
 
                <span>
                    Tipo de acesso
                </span>
 
                <strong>
 
                    <?php
 
                    echo $_SESSION["tipo"];
 
                    ?>
 
                </strong>
 
            </div>
 
 
            <!-- Botão -->
 
            <a
                href="painel.php"
                class="btn-voltar"
            >
                Voltar ao painel
            </a>
 
 
        </div>
 
    </main>
 
</body>
 
</html>