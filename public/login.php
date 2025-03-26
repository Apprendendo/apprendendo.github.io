<?php
    // Criar as variaveis, as funções, a classe de Login e os dados para teste

    class Login {
        public $email = "";
        public $senha = "";

        public $emailTeste = "clara@gmail.com";
        public $senhaTeste = "123";

        public function verificaDados($data){
            // Continua na próxima aula
            // a prof finalizará o código para exibir aos alunos em classe
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($Login()->$email = $Login()->$emailTeste){
            $Login()->$email = $Login()->verificaDados($email);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Aula SW 1</title>
</head>
<body>
    <!-- Agora é com os alunos -->
    <!-- Crie um formulario, com os campos de e-mail e senha -->
    <!-- Use os botões de cancelar e confirmar o login -->
    <!-- Busque redirecionar ao index.php personalizado -->
    <!-- Tente fazer uma validação com uma conta ficticia -->
    <!-- Exemplo: e-mail = "calecmo@gmail.com" senha="123456" -->

    <form action="" method="post">
        <label for="email">Insira seu e-mail</label>
        <input type="email" id="email" name="email" required />
        <br><br>
        <label for="senha">Insira sua senha</label>
        <input type="password" id="senha" name="senha"required />
        <br><br>
        <button type="reset">Cancelar</button>
        <button type="submit">Confirmar</button>
    </form>
</body>
</html>