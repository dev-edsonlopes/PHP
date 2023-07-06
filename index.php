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
        $cars = array(
            array("Marca" => "Ford", "Modelo" => "Fiesta", "Ano" => 2020),
            array("Marca" => "Chevrolet", "Modelo" => "Onix", "Ano" => 2021),
            array("Marca" => "Volkswagen", "Modelo" => "Gol", "Ano" => 2019)
        );

        foreach($cars as $car) {
            foreach($car as $index => $value) {
                echo "$index: $value <br />";
            };
            echo "<br />";
        };
    ?>
</body>
</html>