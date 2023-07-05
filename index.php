<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executar</title>
</head>

<body>
    <?php
        function myFunction() {
            $functionVariable = 20; // Variável de função
        
            echo $functionVariable; // Acesso à variável de função dentro da função
        }
        
        myFunction(); // Saída: 20
        
        echo $functionVariable; // Erro! A variável de função não pode ser acessada fora da função
        
    ?>
</body>
</html>