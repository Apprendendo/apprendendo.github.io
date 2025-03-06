<!DOCTYPE html>
<html>
<head>
  <title>Seu nome</title>
</head>
<body>
 
  <h1>Olá, 
  <?php
    if (isset($_POST['nome'])) {
      $nome = htmlspecialchars($_POST['nome']); // Proteção contra XSS
      echo $nome; 
    } else {
      echo "visitante!"; // Mensagem padrão caso o nome não seja fornecido
    }
  ?>
  !</h1>
 
</body>
</html>
