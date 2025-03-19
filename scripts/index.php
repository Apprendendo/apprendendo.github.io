
<?php
    // Aviso: essa parte precisou ser chamada para montarmos a página no Github pages.
    require __DIR__ . '/../vendor/autoload.php';
    
    $titPag = "Inicio";
    include('header.php');

    $content = "
        <body>
            <div class='w2-container'>
                <h1>Olá</h1>
            </div>
        </body>";

    // Salvar o conteúdo em um arquivo HTML
    file_put_contents(__DIR__ . '/../public/index.html', $content);

    echo "Página compilada com sucesso!\n";
    

?>