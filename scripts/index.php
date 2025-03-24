
<?php
    // Aviso: essa parte precisou ser chamada para montarmos a página no Github pages.
    require __DIR__ . '/../vendor/autoload.php';
    
    $titPag = "Inicio";
    $utf = "UTF-8";
    $lang = "pt-br";
    $relStyle = "stylesheet";
    $linkCss = "/assets/style.css";

    $content = "
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Início</title>
            <link rel='icon' type='image/x-icon' href='../public/assets/images/favicon.ico'>
            <style>
                @import url(https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i);

                *,
                body {
                    font-family: 'Muli light', sans-serif;
                    /* The background image */
                      background-image: url(https://cdn.pixabay.com/photo/2025/02/03/13/53/coffee-9379521_1280.png);
                    
                      /* Set a specified height, or the minimum height for the background image */
                      min-height: 500px;
                    
                      /* Set background image to fixed (don't scroll along with the page) */
                      background-attachment: fixed;
                    
                      /* Center the background image */
                      background-position: center;
                    
                      /* Set the background image to no repeat */
                      background-repeat: no-repeat;
                    
                      /* Scale the background image to be as large as possible */
                      background-size: cover;
                }

                h1,
                p {
                    text-align: center;
                    color: #f1f1f1;
                }

                h1 {
                    padding-top: 20%
                }

                hr {
                    border: shade #E3E3E3;
                    border-width: 1px 0 0;
                    clear: both;
                    /*margin: 11px 0 30px; */
                    height: 0;
                    width: 40%;
                    position: center;
                }
                
                .footer {
                    margin-top: 50px;
                    margin-bottom: 50px;
                }
            </style>
        </head>
        <body>
            <div class='content'>
                <h1>Olá</h1>
                <p>Este é um exemplo de página com PHP.</p>
                <div class='footer'>
                    <hr/>
                    <p>© 2025. Camila L. Oliveira. Todos os direitos reservados.</p>
                </footer>
            </div>
        </body>";

    // Salvar o conteúdo em um arquivo HTML
    file_put_contents(__DIR__ . '/../public/index.html', $content);

    echo "Página compilada com sucesso!\n";
?>
