
<?php
    // Aviso: essa parte precisou ser chamada para montarmos a página no Github pages.
    require __DIR__ . '/../vendor/autoload.php';
    
    $titPag = "Inicio";
    $lang = "pt-br";
    $relStyle = "stylesheet";
    $linkCss = "/assets/style.css";

    $head = "<!DOCTYPE html>
        <html lang=".$lang.">
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>".$titPag." - ".$nomePag."</title>
            <link rel=".$relStyle." href=".$linkCss.">
        </head>";

    $content = "
        <body>
            <h1>Olá</h1>
            <p>Este é um exemplo de página com PHP.</p>
            <hr/>
            <p>2025. Camila L. Oliveira. Todos os direitos reservados.</p>
        </body>";

    // Salvar o conteúdo em um arquivo HTML
    file_put_contents(__DIR__ . '/../public/index.html', $head);

    echo "Página compilada com sucesso!\n";
?>