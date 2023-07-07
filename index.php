<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executar</title>
    <style>
        body {
            background-color: #18243c;
            color: #ccc;
            
            height: 100vh;
            
            font-weight: 900;
            font-family: 'Courier New', Courier, monospace;
            font-size: 22pt;

            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php
        $cores = array("Verde", "Vermelho", "Azul", "Preto");
        foreach($cores as $indice => $valor):
            echo "[$indice] $valor <br />";
        endforeach;
    ?>
</body>
</html>