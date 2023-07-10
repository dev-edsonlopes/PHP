# Formulários

Formulários `HTML` são usados para coletar dados dos usuários. Eles permitem que os usuários insiram informações e as enviem para processamento em um servidor.

Aqui está um exemplo básico de um formulário `HTML`:

``` html
<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário</title>
</head>
<body>
    <form action="dados.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```

Neste exemplo, temos um formulário com dois campos: `"nome"` e `"email"`. O atributo `action` define o arquivo de processamento para onde os dados do formulário serão enviados. No exemplo acima, os dados serão enviados para `"dados.php"`. O atributo `method` especifica o método de envio dos dados, neste caso, `POST`.

No arquivo `"dados.php"`, você pode acessar os valores enviados pelo formulário usando a superglobal` $_POST`. Aqui está um exemplo simples de como acessar e exibir esses valores:

```php
<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "Seu nome é $nome e seu email é $email";
?>
```
No exemplo acima, os valores dos campos `"nome"` e `"email"` são acessados usando `$_POST['nome']` e `$_POST['email']`, respectivamente. Esses valores podem ser processados posteriormente, armazenados em um banco de dados ou usados de outras maneiras, dependendo das necessidades do seu aplicativo.

É importante lembrar de validar e filtrar os dados recebidos do formulário para garantir a segurança e a integridade dos dados.

## Validações (filter_input e filter_var)

As funções `filter_input` e `filter_var` são utilizadas em PHP para validar e filtrar dados com base em filtros predefinidos. Elas são úteis para garantir que os dados fornecidos pelos usuários ou outras fontes estejam corretos e seguros. 

### filter_input

A função filter_input é usada para validar e filtrar uma variável específica, geralmente proveniente de uma superglobal como `$_POST` ou `$_GET`.

- O primeiro argumento é o tipo de variável que você está validando (INPUT_GET, INPUT_POST, INPUT_COOKIE, etc.).

- O segundo argumento é o nome da variável que você deseja validar.

- O terceiro argumento é o filtro que será aplicado à variável.

A função retorna o valor filtrado se a validação for bem-sucedida, ou false caso contrário.

Exemplo:

```php
<?php 
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email !== false):
        echo "Email válido, continue com o processamento";
    else:
        echo "Email inválido, trate o erro";
    endif;
?>
```
### filter_var

A função `filter_var` é semelhante ao `filter_input`, mas pode ser usada para validar e filtrar qualquer variável, não apenas as provenientes de superglobais. Ela também recebe três argumentos:

- O primeiro argumento é a variável que você deseja validar.
- O segundo argumento é o filtro que será aplicado à variável.
- O terceiro argumento é opcional e é usado para fornecer opções adicionais para o filtro selecionado. 

Exemplo: 
```php
<?php 
    $url = "http://www.example.com";
    $url = filter_var($url, FILTER_VALIDATE_URL);
    if ($url !== false) {
        echo "URL válida, continue com o processamento";
    } else {
        echo "URL inválida, trate o erro";
    }
?>
```
Exemplo do uso do terceiro argumento na função :
```php
<?php
    $numero = "12345";
    $numero = filter_var($numero, FILTER_VALIDATE_INT, array(
        'options' => array(
            'min_range' => 1,
            'max_range' => 100
        )
    ));
    if ($numero !== false) {
        echo "Número válido dentro do intervalo especificado, continue com o processamento";
    } else {
        echo "Número inválido ou fora do intervalo, trate o erro";
    }
?>
```

### Validate Filters (Filtros de Validação)

Os filtros de validação são usados para verificar se um valor possui um formato válido de acordo com um determinado critério. Eles retornam `false` se o valor não atender ao critério especificado ou o valor filtrado se a validação for bem-sucedida.

Alguns filtros de validação são:

- `FILTER_VALIDATE_EMAIL`: Verifica se um valor é um endereço de email válido.
- `FILTER_VALIDATE_IP`: Verifica se um valor é um endereço IP válido.
- `FILTER_VALIDATE_URL`: Verifica se um valor é uma URL válida.
- `FILTER_VALIDATE_INT`: Verifica se um valor é um número inteiro.
- `FILTER_VALIDATE_FLOAT`: Verifica se um valor é um número de ponto flutuante.

Exemplo: 

```php
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <label for="idade">Idade:</label>
    <input type="text" name="idade" id="idade">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <label for="peso">Peso:</label>
    <input type="text" name="peso" id="peso">
    <label for="ip">IP:</label>
    <input type="text" name="ip" id="ip">
    <label for="url">URL:</label>
    <input type="text" name="url" id="url">
    <button type="submit" name="enviar-form">Enviar</button>
</form>

<?php 
    if(isset($_POST['enviar-form'])):
        $errors = array();

        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
            $errors[] = "Idade não correspondido";
        endif;

        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $errors[] = "Email não correspondido";
        endif;

        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
            $errors[] = "Peso não correspondido";
        endif;

        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
            $errors[] = "IP não correspondido";
        endif;

        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
            $errors[] = "URL não correspondido";
        endif;

        if(!empty($errors)):
            foreach($errors as $error):
                echo "<li><span style='color: red;'>$error</span></li>";
            endforeach;
        else:
            echo "<p style='color: #7AFFB8;'>Parabéns! Seu formulário foi enviado com êxito!</p>";
        endif;
    endif;
?>
```

### Sanitize Filters (Filtros de Sanitização) 

Os filtros de sanitização são usados para remover ou limpar partes indesejadas ou perigosas de um valor. Eles retornam o valor filtrado após a remoção ou limpeza das partes indesejadas.

Alguns filtros de sanitização são:

- `FILTER_SANITIZE_STRING`: Remove tags HTML e caracteres especiais de uma string.
- `FILTER_SANITIZE_EMAIL`: Remove caracteres não permitidos em um endereço de email.
- `FILTER_SANITIZE_URL`: Remove caracteres não permitidos em uma URL.
- `FILTER_SANITIZE_NUMBER_INT`: Remove todos os caracteres, exceto dígitos, de um número inteiro.

Exemplo: 

```php
<body>
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
    </form>
</body>
```
