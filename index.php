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
       $nomes = array("Edson", "Gleydson", "Cristano", "Nivaldo", "Henrique");
       foreach($nomes as $nome) {
        echo "$nome<br />";
       };
    ?>
</body>
</html>