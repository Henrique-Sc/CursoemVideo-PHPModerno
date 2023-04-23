<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáreis e constantes • Curso em Vídeo - PHP Moderno</title>
</head>
<body>
    <h1>Variáveis e Constante</h1>

    <?php
        $nome = 'Henrique';
        $sobrenome = 'Silva';
        const PAIS = 'Brasil';

        $nome = 'Gustavo';
        // PAIS = 'França';

        echo "Muito prazer, $nome $sobrenome! Você mora no(a) " . PAIS . ".";
    ?>
</body>
</html>