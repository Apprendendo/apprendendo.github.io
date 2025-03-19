<?php

    require __DIR__ . '/../vendor/autoload.php';

    // Seu código PHP para gerar o conteúdo da página
    $content = "<h1>Página gerada pelo PHP</h1><p>Data: " . date('Y-m-d H:i:s') . "</p>";

    // Salvar o conteúdo em um arquivo HTML
    file_put_contents(__DIR__ . '/../public/index.html', $content);

    echo "Página compilada com sucesso!\n";
