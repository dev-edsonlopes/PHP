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
            margin: 50px;
            display: flex;
            flex-direction: column;
            
            width: 450px;
        }

        input {
            margin-bottom: 10px;
            height: 22px;
        }
        
        button {
            border: none;
            border-radius: 8px;
            background-color: #7A86B8;
            
            height: 50px;
            width: 225px ;
            
            color: #fff;
            font-weight: bold;
        }
        
        button:hover {
            background-color: #7AFFB8;
            color: #000;
            font-weight: bold;
        }
        
        #executar {
            font-size: 12pt;
            
            border: 1px 1px solid #7A86B8;
        }
        </style>
</head>

<body>
<<<<<<< HEAD
    <div id="executar">
    <?php 
        if(isset($_POST['enviar-form'])):
            $errors = array();

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            
            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if(!$idade = filter_var( $idade, FILTER_VALIDATE_INT)) {
                $errors[] = "Idade não correspondido";
            };

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!$email = filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email não correspondido";
            };
            
            $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT);
            if(!$peso = filter_var($peso, FILTER_VALIDATE_FLOAT)) {
                $errors[] = "Peso não correspondido";
            };

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!$url = filter_var( $url, FILTER_VALIDATE_URL)) {
                $errors[] = "URL não correspondido";
            };

            if(!empty($errors)) {
                foreach($errors as $error) {
                    echo "<li><span style='color: red;'>$error</span></li>";
                }
            } else {
                echo "<p style='color: #7AFFB8;'>Parabéns! Seu formulário foi enviado com êxito!</p>";
            }
        endif;
    ?>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="idade">Idade:</label>
        <input type="text" name="idade" id="idade">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="peso">Peso:</label>
        <input type="text" name="peso" id="peso">
        <label for="url">URL:</label>
        <input type="text" name="url" id="url">
        <button type="submit" name="enviar-form">Enviar</button>
=======
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
>>>>>>> d73ce51169e0e451a5a082a3c1b59506bc841852
    </form>
</body>

</html>