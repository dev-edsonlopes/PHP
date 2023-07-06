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
        }
    </style>
</head>
<body>
    <?php
        

        $motos = array(1=> "Yamaha", 2=>"Honda");
    $motos[10] = "Suzuki";
    print_r($motos);
 ?>
</body>
</html>