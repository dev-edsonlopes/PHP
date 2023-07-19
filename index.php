<?php 
// Conexão BD
    require_once 'db_connect/index.php';

// Sesssão
session_start();


    if(isset($_POST['btn_entrar'])) {
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if(empty($login) || empty($senha)) {
            $erros[] = "<li> <span>O campo Login/Senha precisa ser preenchido</span> </li>";
        } else {
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            $resultado = mysqli_query($connect, $sql);
            
            // Verificando se tem registro;
            if(mysqli_num_rows($resultado) > 0) {
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado) === 1) {
                    
                    // armazenando dados
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: public\home.php');
                } else {
                    $erros[] = "<li><span>Senha Incorreta</span> </li>";
                }
            } else {
                $erros[] = "<li> <span>Usuário inexistente</span> </li>";
            }
            
            
        }
    }
?>

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
        
        span {
            font-size: 14pt;
            color: red;
        }
        </style>
</head>

<body>
    <h1>Login Exemple</h1>
  
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <label for="login">Login</label>
        <input type="text" name="login">

        <label for="senha">Password</label>
        <input type="password" name="senha">

        <button type="submit" name="btn_entrar"> Entrar </button>
    </form>
    <?php 
        if(!empty($erros)) {
            foreach($erros as $erro) {
                echo $erro;
            }
        }
    ?>
</body>

</html>