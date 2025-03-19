<?php

    require __DIR__ . '/../vendor/autoload.php';

    // Seu código PHP para gerar o conteúdo da página
    $content = "<h1>Página inicial das aulas de SW 1, em PHP</h1>
        <h2>Prof. Camila Leite</h2>
        <p>Data: " . date('d/m/Y H:i:s') . "</p>";

    // Salvar o conteúdo em um arquivo HTML
    file_put_contents(__DIR__ . '/../public/index.html', $content);

    echo "Página compilada com sucesso!\n";
