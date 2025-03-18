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
    <title>Cadastro | Aula SW I</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container">
        <h1 class="w3-title">Cadastro</h1>
        <form action="<?php echo htmlspecialchars("index.php")?>" method="post">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required> 
            <span class="w3-error">* <?=$campoErr?></span>
            <p>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required> 
            <span class="w3-error">* <?=$campoErr?></span>
            <p>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required> 
            <span class="w3-error">* <?=$campoErr?></span>
            <p>
            <label for="genero">Genero</label>
            <input type="radio" name="genero" value="mulher">Mulher
            <input type="radio" name="genero" value="homem">Homem
            <input type="radio" name="genero" value="outros">Outros/NB
            <span class="w3-error">* <?=$campoErr?></span>
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