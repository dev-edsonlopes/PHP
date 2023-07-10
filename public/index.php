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
            flex-direction: column;
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
    <?php
    if (isset($_POST['enviar-formulario'])) {
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        if (in_array($extensao, $formatosPermitidos)) {
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid() . ".$extensao";

            if (move_uploaded_file($temporario, $pasta . $novoNome)) {
                $mensagem = "Upload feito com sucesso!";
            } else {
                $mensagem = "Erro, não foi possível fazer o upload";
            }
        } else {
            $mensagem = "Formato inválido";
        }

        echo $mensagem;
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> <!-- Sem isso não tem upload de arquivos -->
        <input type="file" name="arquivo">
        <input type="submit" name="enviar-formulário">
    </form>
</body>

</html>