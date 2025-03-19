
<?php
    // Aviso: essa parte precisou ser chamada para montarmos a página no Github pages.
    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ .'/assets/style.css';


    $content = "
        <body>
            <h1>Olá</h1>
            <p>Este é um exemplo de página com PHP.</p>
            <hr/>
            <p>2025. Camila L. Oliveira. Todos os direitos reservados.</p>
        </body>";

    // Salvar o conteúdo em um arquivo HTML
    file_put_contents(__DIR__ . '/../public/index.html', $content);

    echo "Página compilada com sucesso!\n";
?>