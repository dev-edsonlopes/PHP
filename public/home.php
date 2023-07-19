<?php 
// Conexão BD
    require_once '../db_connect/index.php';
// Sesssão
session_start();

//Verificação

// Verificando se Tem sessão aberta
if(!isset($_SESSION['logado'])) {
    header('Location: ../index.php');
}

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

// Fechando a coneção
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        
        span {
            font-size: 14pt;
            color: red;
        }
        </style>
</head>
<body>
    <h1>Página principal</h1>
    <p>Seja bem vindo <?php echo $dados['nome'];?></p>
    <a href="logout.php"><button>Sair</button></a>
</body>
</html>