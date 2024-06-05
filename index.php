<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gatospock.cc</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000; /* Fundo preto para destacar a imagem */
        }
        img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* A imagem cobrirá toda a tela */
        }
    </style>
</head>
<body>
    <?php
        // Caminho da pasta de imagens
        $imageDir = 'images';
        
        // Obter uma lista de arquivos na pasta de imagens com as extensões especificadas
        $images = glob($imageDir . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        // Verificar se há imagens na pasta
        if ($images) {
            // Selecionar uma imagem aleatória
            $randomImage = $images[array_rand($images)];
            echo '<img src="' . $randomImage . '" alt="Imagem Aleatória">';
        } else {
            echo '<p style="color: white;">Nenhuma imagem encontrada na pasta.</p>';
        }
    ?>
</body>
</html>
