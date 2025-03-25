<?php
    //Ajustei a pagina com a classe de cadastro pra organizar o codigo

    class Cadastro {
        //Variaveis do cadastro
        public $nome = $email = $senha = $genero = $descricao = $website = "";
        public $nomeErr = "";
        public $campoErr = false;

        public function verificaPreCadastro($data) {
            if(isset($data)){
                $data = $this->verificaDados($data);
            } else {
                $data = "";
                $this->errou(true);
            }
            return $data;
        }

        public function errou($data) {
            if($data == true){
                $campoErr = "Este campo é de preenchimento obrigatório";
            } 
            return $campoErr;
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

    if($_SERVER["REQUEST_METHOD"] = "POST"){
        $nome = new Cadastro()->verificaPreCadastro($_POST["nome"]);
        $email = new Cadastro()->verificaPreCadastro($_POST["email"]);
        $senha = new Cadastro()->verificaPreCadastro($_POST["senha"]);
        $genero = new Cadastro()->verificaPreCadastro($_POST["genero"]);
        $descricao = new Cadastro()->verificaDados($_POST["descricao"]);
        $website = new Cadastro()->verificaDados($_POST["website"]);
    }

    //Proxima aula - Configurar classe Login e como tratar

    //Declarando variáveis pós login
    $emailTeste="joyce@gmail.com";
    $senhaTeste = "123456";


    if($_SERVER["REQUEST_METHOD"] = "POST"){
        if($email = $emailTeste){
            $email = verificaDados($_POST["email"]);
            if($senha = $senhaTeste) {
                $senha = verificaDados($_POST["senha"]);
            } else {
                $erro = "Senha inválida. Tente novamente";
            }
        } else {
            $erro = "E-mail inválido. Tente novamente";
        }
    } else {
        $erro = "Método selecionado precisa ser post";
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
    <div class="w2-container">
        <!--<h1>Olá <?=$nome;?></h1>
        <h2 class="w3-title">Dados cadastrados</h2>
        <p>E-mail cadastrado: <?=$email;?></p>
        <p>Genero: <?=$genero;?></p>
        <p>Website: <?=$website;?></p>
        <p>Descrição: <?=$descricao;?></p>-->

        
    </div>
</body>
</html>
