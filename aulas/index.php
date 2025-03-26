<?php
// Incluindo as classes necessárias
require_once("cadastro.php");
require_once("login.php");

// Instanciando as classes
$cadastro = new Cadastro();
$login = new Login();

$mensagemCadastro = "";
$mensagemLogin = "";

// Verificando se o formulário de Cadastro foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_tipo"]) && $_POST["form_tipo"] == "cadastro") {
    $nome = $cadastro->verificaPreCadastro($_POST["nome"]);
    $email = $cadastro->verificaPreCadastro($_POST["email"]);
    $senha = $cadastro->verificaPreCadastro($_POST["senha"]);
    $genero = $cadastro->verificaPreCadastro($_POST["genero"]);
    $descricao = $cadastro->verificaDados($_POST["descricao"]);
    $website = $cadastro->verificaDados($_POST["website"]);

    $mensagemCadastro = "Cadastro realizado com sucesso!";
}

// Verificando se o formulário de Login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_tipo"]) && $_POST["form_tipo"] == "login") {
    $mensagemLogin = $login->verificaDados($_POST["email"], $_POST["senha"]);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Aulas SW I</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container">
        <!-- Mensagens -->
        <?php if (!empty($mensagemCadastro)) echo "<p class='w3-green'>$mensagemCadastro</p>"; ?>
        <?php if (!empty($mensagemLogin)) echo "<p class='w3-blue'>$mensagemLogin</p>"; ?>

        <!-- Exibição de dados do Cadastro -->
        <?php if (!empty($nome)): ?>
            <h2>Bem-vindo, <?= htmlspecialchars($nome); ?></h2>
            <p>E-mail: <?= htmlspecialchars($email); ?></p>
            <p>Gênero: <?= htmlspecialchars($genero); ?></p>
            <p>Descrição: <?= htmlspecialchars($descricao); ?></p>
            <p>Website: <?= htmlspecialchars($website); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
