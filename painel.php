<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location:index.php");
    exit;
}
?>

 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
 
    <meta charset="UTF-8">
 
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
 
    <title>Painel - Sistema PHP</title>
 
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
 
 
            <?php
 
            // Verifica se o usuário é administrador
 
            if (
                isset($_SESSION["tipo"]) &&
                $_SESSION["tipo"] == "administrador"
            ) {
 
            ?>
 
                <a href="admin.php">
                    Administração
                </a>
 
            <?php
 
            }
 
            ?>
 
 
            <a
                href="logout.php"
                class="btn-sair"
            >
                Sair
            </a>
 
        </nav>
 
    </header>
 
 
    <!-- CONTEÚDO -->
 
    <main class="painel">
 
 
        <!-- BOAS-VINDAS -->
 
        <div class="boas-vindas">
 
            <span class="icone-painel">
                👋
            </span>
 
 
            <div>
 
                <h1>
 
                    Olá,
                    <?php echo $_SESSION["usuario"]; ?>!
 
                </h1>
 
 
                <p>
                    Seja bem-vindo ao painel do sistema.
                </p>
 
            </div>
 
        </div>
 
 
        <!-- CARDS -->
 
        <div class="cards">
 
 
            <!-- CARD PERFIL -->
 
            <div class="card">
 
                <div class="card-icone">
                    👤
                </div>
 
                <h2>
                    Meu Perfil
                </h2>
 
                <p>
                    Visualize suas informações cadastradas.
                </p>
 
                <a href="perfil.php">
                    Acessar
                </a>
 
            </div>
 
 
            <!-- CARD SESSÃO -->
 
            <div class="card">
 
                <div class="card-icone">
                    🔒
                </div>
 
                <h2>
                    Sessão
                </h2>
 
                <p>
                    Este sistema utiliza sessões do PHP.
                </p>
 
            </div>
 
 
            <!-- CARD ADMIN -->
 
            <?php
 
            if (
                isset($_SESSION["tipo"]) &&
                $_SESSION["tipo"] == "administrador"
            ) {
 
            ?>
 
                <div class="card">
 
                    <div class="card-icone">
                        ⚙️
                    </div>

                    <h2>
                        Administração
                    </h2>
                    <p>
                        Área exclusiva do administrador.
                    </p>
                    <a href="admin.php">
                        Acessar
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>
</html>
 