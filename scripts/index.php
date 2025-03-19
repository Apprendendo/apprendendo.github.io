<?php
    // Aviso: essa parte precisou ser chamada para montarmos a página no Github pages.
    require __DIR__ . '/../vendor/autoload.php';
    
    /**
    //variáveis globais
    $nome = $email = $senha = $genero = $descricao = $website = "";
    $campoErr = "";

    if($_SERVER["REQUEST_METHOD"] = "POST"){
        $nome = test_input_required($_POST["nome"]);
        $email = test_input_required($_POST["email"]);
        $senha = test_input_required($_POST["senha"]);
        $genero = test_input_required($_POST["genero"]);
        $descricao = test_input($_POST["descricao"]);
        $website = test_input($_POST["website"]);
    }
    function test_input_required($data){
        if(isset($data)){
            $data = test_input($data);
        } else {
            $data = "";
            $campoErr = "Este campo é de preenchimento obrigatório";
        }
        return $data;
    }

    function test_input( $data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    */

    //Declarando variáveis pós login
    $emailTeste="joyce@gmail.com";
    $senhaTeste = "123456";

    $email = $senha ="";

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

    function verificaDados($dado){
        if(isset($dado)){
            $dado = trim($dado);
            $dado = stripslashes($dado);
            $dado = htmlspecialchars($dado);
            return $dado;
        }
    }

    $conteudoIndex = "<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Inicio - Aulas SW I</title>
            <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
        </head>
        <body>
            <div class='w2-container'>
                <!--<h1>Olá". $nome."</h1>
                <h2 class='w3-title'>Dados cadastrados</h2>
                <p>E-mail cadastrado: ".$email."</p>
                <p>Genero: ".$genero."</p>
                <p>Website: ".$website."</p>
                <p>Descrição: ".$descricao."</p>-->
            </div>
        </body>
        </html>";

        // Salvar o conteúdo em um arquivo HTML
        file_put_contents(__DIR__ . '/../public/index.html', $conteudoIndex);

        echo "Página compilada com sucesso!\n";

?>
