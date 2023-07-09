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

        form {
            display: flex;
            flex-direction: column;
            width: 450px;
        }
        
        input {
            margin-bottom: 10px;
            height: 22px;
        }
    </style>
</head>
<body>
    <form action="dados.php" methods="GET">
    <a href="dados.php?nome=Edson&sobrenome=Lopes+da+Silva+Junior">
        Enviar Dados
    </a>
    </form>
</body>
</html>