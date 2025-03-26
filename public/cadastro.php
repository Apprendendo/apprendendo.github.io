<?php 
    // Ajeitar os scripts para a próxima aula

    class Cadastro {
        //Variaveis do cadastro
        public $nome = "";
        public $email = "";
        public $senha = "";
        public $genero = "";
        public $descricao = "";
        public $website = "";
        public $nomeErr = "";
        public $mensagemErro = "";
        public $erro = false;

        public function verificaPreCadastro($data) {
            if(isset($data)){
                if($data = "nome"){
                    $data = $this->verificaNome($data);
                }
                $data = $this->verificaDados($data);
            } else {
                $data = "";
                $erro = true;
                $this->errou($erro);
            }
            return $data;
        }

        public function verificaNome($data) {
            if (!preg_match("/^[a-zA-Z-' ]*$/",$data)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        

        public function errou($data) {
            if($data = true) {
                $mensagemErro = "Este campo é de preenchimento obrigatório";
            } 
            return $mensagemErro;
        }

        public function verificaDados($dado){
            if(isset($dado)){
                $dado = trim($dado);
                $dado = stripslashes($dado);
                $dado = htmlspecialchars($dado);
                return $dado;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Aula SW I</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container">
        <h1 class="w3-title">Cadastro</h1>
        <form action="<?php echo htmlspecialchars("index.php")?>" method="post">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required> 
            <span class="w3-error">* <?=$mensagemErro;?></span>
            <p>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required> 
            <span class="w3-error">* <?=$mensagemErro;?></span>
            <p>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required> 
            <span class="w3-error">* <?=$mensagemErro;?></span>
            <p>
            <label for="genero">Genero</label>
            <input type="radio" name="genero" value="mulher">Mulher
            <input type="radio" name="genero" value="homem">Homem
            <input type="radio" name="genero" value="outros">Outros/NB
            <span class="w3-error">* <?=$mensagemErro;?></span>
            <p>
            <label for="website">Website</label>
            <input type="url" id="website" name="website"> 
            <p>
            <label for="descricao">Descrição</label>
            <textarea name="descricao" rows="5" cols="40"></textarea>
            <p>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
