#  Funções

As funções permitem que você agrupe um bloco de código que pode ser reutilizado várias vezes em seu programa.

## Definindo uma Função

Para definir uma função, você usa a palavra-chave `function`, seguida pelo nome da função, que podem conter paramentos de função em seguida.

```php
<?php 
    function nameFunction($parameter1, $parameter2) {
        //Bloco de código a ser executado.
    }
?>
```

Exemplo:
```php
<?php
    function showMessage() {
        echo "Hello World!";
    }

    //Chamando uma Função
    showMessage()
?>
```

## Funções com Parâmetros

Você pode definir funções que recebam parâmetros, permitindo que você passe valores para a função.

Exemplo:
```php
<?php 
    <?php
       function sum($number1, $number2) {
            $result = $number1 + $number2;
            echo "A soma total é $result";
       }

       sum(4,7); // Chama a função sum com os argumentos 4 e 7
    ?>
?>
```

## Retornando Valores

Uma função pode retornar um valor usando a palavra-chave `return`. isso permite que você obtenha um resultado da função e o use em outras partes do seu programa.

Exemplo:
```php
<?php
    function sum($number1, $number2) {
        $result = $number1 + $number2;
        return $result;
    }

    $nota = sum(4,2);
    echo $nota;
?>
```

## Funções Pré-definidas (Built-in)

[Lista de Funções e Métodos](https://www.php.net/manual/pt_BR/indexes.functions.php)