<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location:index.php");
    exit;
}
if(!isset($_SESSION["tipo"]) || $_SESSION["tipo"] !== "admin"){
    header("Location:painel.php");
    exit;

?>

<!DOCTYPE html>
    <html lang="pt-br">
 
    <head>
 
        <meta charset="UTF-8">
 
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        >
 
        <title>Acesso Negado</title>
 
        <link
            rel="stylesheet"
            href="css/style.css"
        >
 
    </head>
 
    <body>
 
        <div class="mensagem-container">
 
            <div class="mensagem-card">
 
                <div class="icone-erro">
                    🚫
                </div>
 
                <h1>
                    Acesso negado
                </h1>
 
                <p>
                    Você não possui permissão para acessar esta área.
                </p>
 
                <a
                    href="painel.php"
                    class="btn-voltar"
                >
                    Voltar ao painel
                </a>
 
            </div>
 
        </div>
 
    </body>
 
    </html>
 
    <?php
 
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
 
    <title>Administração</title>
 
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
 
 
    <!-- ÁREA ADMINISTRATIVA -->
 
    <main class="admin-container">
 
        <div class="admin-card">
 
            <div class="admin-icone">
                ⚙️
            </div>
 
 
            <h1>
                Área Administrativa
            </h1>
 
 
            <p>
                Bem-vindo à área administrativa.
            </p>
 
 
            <div class="admin-info">
 
                <strong>
                    Usuário conectado:
                </strong>
 
                <?php
 
                echo $_SESSION["usuario"];
 
                ?>
 
            </div>
 
 
            <div class="admin-info">
 
                <strong>
                    Tipo:
                </strong>
 
                <?php
 
                echo $_SESSION["tipo"];
 
                ?>
 
            </div>
 
 
        </div>
 
    </main>
 
</body>
 
</html>
 