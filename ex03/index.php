<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes em PHP</title>
</head>
<body>
    <h1>Variáveis e constantes em PHP</h1>
    <?php
    //Variáveis
        $nome = "Edson";
        $sobrenome = "Lopes";

        // echo "Prazer meu nome é $nome $sobrenome";
        
        //Alterando
        $nome = "Jennifer";
        $sobrenome = "Marcela";

        // echo "Prazer meu nome é $nome $sobrenome";
        
        const PAIS = "Brasil";
        // PAIS = "EUA"; // ERROR
        
        echo "Prazer meu nome é $nome $sobrenome e moro no " . PAIS;
    ?>
</body>
</html>