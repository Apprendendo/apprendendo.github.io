<?php
// Classe para gerenciar o login
class Login {
    public $emailTeste = "calecmo@gmail.com";
    public $senhaTeste = "123456";

    // Função para validar o login
    public function verificaDados($email, $senha) {
        if ($email === $this->emailTeste && $senha === $this->senhaTeste) {
            return "Login realizado com sucesso! Bem-vindo de volta!";
        } else {
            return "E-mail ou senha incorretos. Tente novamente.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Aula SW I</title>
</head>
<body>
    <div class="w3-container">
        <h1>Login</h1>
        <form action="index.php" method="post">
            <input type="hidden" name="form_tipo" value="login"> <!-- Define o tipo do formulário -->
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <p>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <p>
            <button type="submit">Confirmar</button>
        </form>
    </div>
</body>
</html>
