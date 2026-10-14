<?php
session_start();
if(!isset($_SESSION["cadastro"])){
 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Necessário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="mensagem-container">
        <div class="mensagem-card">
            <div class="icone-erro">
                ⚠️
            </div>
            <h1>
                Nenhum cadastro
            </h1>
            <p>
                Você precisa criar uma conta antes de fazer login
            </p>
            <a href = "cadastro.php" class="btn-voltar">
                criar cadastro
            </a>
        </div>
    </div>
    </body>
</html>
<?php
exit;
}
$email = $_POST["email"];
$senha = $_POST["senha"];
$cadastro = $_SESSION["cadastro"];
if($email == $cadastro["email"]&&
$senha == $cadastro["senha"]){
    $_SESSION["usuario"] = $cadastro["nome"];
    $_SESSION["email"] = $cadastro["email"];
    $_SESSION["tipo"] = $cadastro["aluno"];
    header("Location: painel.php");
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
 
    <title>Login inválido</title>
 
    <link
        rel="stylesheet"
        href="css/style.css"
    >
 
</head>
 
<body>
 
    <div class="mensagem-container">
 
        <div class="mensagem-card">
 
            <div class="icone-erro">
                ❌
            </div>
 
            <h1>
                Login inválido
            </h1>
 
            <p>
                E-mail ou senha incorretos.
            </p>
 
            <a
                href="index.php"
                class="btn-voltar"
            >
                Tentar novamente
            </a>
 
        </div>
 
    </div>
 
</body>
 
</html>
<?php
exit;
}
$email = $_POST["email"];
$senha = $_POST["senha"];
$cadastro = $_SESSION["cadastro"];
if($email == $cadastro["email"] && $senha == $cadastro["senha"]){
    $_SESSION["usuario"] = $cadastro["nome"];
    $_SESSION["email"] = $cadastro["email"];
    $_SESSION["tipo"] = $cadastro["tipo"];
    header("Location: painel.php");
    exit;
}
?>