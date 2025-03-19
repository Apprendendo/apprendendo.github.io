<?php

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
        <h1>Olá <?=$nome;?></h1>
        <h2 class="w3-title">Dados cadastrados</h2>
        <p>E-mail cadastrado: <?=$email;?></p>
        <p>Genero: <?=$genero;?></p>
        <p>Website: <?=$website;?></p>
        <p>Descrição: <?=$descricao;?></p>
    </div>
</body>
</html>
