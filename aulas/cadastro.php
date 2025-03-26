<?php
// Classe para gerenciar o cadastro
class Cadastro {
    public $nome = $email = $senha = $genero = $descricao = $website = "";

    // Função para verificar e limpar os dados do cadastro
    public function verificaPreCadastro($data) {
        if (!empty($data)) {
            return $this->verificaDados($data);
        } else {
            return "Campo obrigatório.";
        }
    }

    // Função para sanitizar os dados
    public function verificaDados($dado) {
        $dado = trim($dado);
        $dado = stripslashes($dado);
        $dado = htmlspecialchars($dado);
        return $dado;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Aula SW I</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="w3-container">
        <h1>Cadastro</h1>
        <form action="index.php" method="post">
            <input type="hidden" name="form_tipo" value="cadastro"> <!-- Define o tipo do formulário -->
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <p>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <p>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <p>
            <label>Gênero:</label>
            <input type="radio" name="genero" value="Feminino"> Feminino
            <input type="radio" name="genero" value="Masculino"> Masculino
            <input type="radio" name="genero" value="Outro"> Outro
            <p>
            <label for="website">Website:</label>
            <input type="url" id="website" name="website">
            <p>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" rows="5"></textarea>
            <p>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
