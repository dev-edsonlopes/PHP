# Fundamentos Básicos


## PHP usando a tag `<?php>`

Para executar um comando em PHP, você precisa envolvê-lo dentro da tag `<?php>`

Aqui está um exemplo de como você pode executar um comando básico de "Hello World" em PHP:

```php
<?php
    echo "Hello World <br />";
    print "My name is Edson";
?>
```

> `echo` e `print` é dois comandos de saída em `php`

## Comentários em PHP

Existem duas formas de adicionar comentários em PHP:

```php
<?php
    // Isso é um comentário de uma linha
?>
```

```php
<?php
    /* 
        Isso é um comentário
        com várias linhas
    */
?>
```

## Variáveis

São espaço reservado na memoria do computador para guardar informações que será utilizados durante a execução do programa.

Criando Variáveis:

```php
<?php 
    // --- Entrada de dados ---
    $nome = "Edson Lopes Jr";
    $idade = 23;
    $altura = 1.78;

    // --- Saída de dados ---
    echo "Nome: $nome<br />Idade: $idade<br />Altura: $altura";
    echo "<hr />";

    // --- Alterando os dados ---
    $nome = "Cristiano do Rego";
    $idade = 20;
    $altura = 1.62;

    // --- Saída de dados ---
    echo "Nome: $nome<br />Idade: $idade<br />Altura: $altura";
?>
```
- Para criar uma variável em PHP, comece usando o símbolo do cifrão (`$`).
- Em seguida, adicione um nome significativo para a variável.
- Após o nome da variável, use o operador de atribuição (`=`) para atribuir um valor à variável.

Criando Variáveis Dinâmicas:

Para criar variáveis dinâmicas, você pode usar o símbolo do cifrão (`$`) duas vezes. O primeiro cifrão indica que você está usando uma variável variável, e o segundo cifrão é usado para acessar o valor da variável.

```php
<?php
    $destino = 'cidade'; // Variável $destino recebe o valor 'cidade'
    $$destino = 'Jaboatão dos Guararapes'; // Variável dinâmica $cidade é criada e recebe o valor 'Jaboatão dos Guararapes'
    
    echo "$destino: $cidade"; // Imprime o valor das variáveis $destino e $cidade
?>
```
## Tipos de Dados

Os tipos de dados em PHP podem ser classificados em três categorias principais: tipos escalares, tipos compostos e tipos especiais.

1. ### Tipos escalares:

- `String`: Armazena sequências de caracteres.

```php
<?php
    $character = "Hello";
    var_dump($character);float(3.14)
?>
```

> `string(5)` "Hello"

- `Integer`: Armazena números inteiros.

```php
<?php
    $number = 42;
    var_dump($number);
?>
```

> `int(42)`

- `Float`: Armazena números de ponto flutuante (números decimais).

```php
<?php
    $floatNumber = 3.14;
    var_dump($floatNumber);
?>
 
```

> `float(3.14)`

- `Boolean`: Armazena valores de verdadeiro ou falso.

```php
<?php
    $isTrue = true; 
    var_dump($isTrue);
?>

```

> `bool(true)`

- `NULL`: Armazena um valor nulo (ausência de valor).

<?php 
```php
    $isNull = null;
    var_dump($isNull);
?>

```

> `NULL`


2. ### Tipos compostos:

- `Array`: Armazena coleções de valores relacionados, acessíveis por chaves ou índices.

```php
<?php 
    $fruits = array("Apple", "Banana", "Orange"); // Array
    var_dump($fruits);
?>
```

> `array(3)` { [`0`]=> `string(5)` "Apple" [`1`]=> `string(6)` "Banana" [`2`]=> `string(6)` "Orange" }

- `Object`: Cria instâncias de classes, permitindo a definição de propriedades e métodos.

```php
<?php 
    class Person {
        public $name;
        public $age;
    }
    
    $person = new Person(); // Object
    $person->name = "Edson Lopes";
    $person->age = 23;
    var_dump($person);
?>

```

> `object(Person)`#1 (2) { `["name"]`=> `string(11)` "Edson Lopes" `["age"]`=> `int(23)` }

## Delimitação Strings

- **Aspas simples**: Quando você usa aspas simples para delimitar uma string, o texto é interpretado literalmente, sem expandir variáveis ou caracteres de escape.

Exemplo:

```php
<?php
    $name = 'Edson Lopes';
    $string = 'Olá, $name!'; // A variável $name não será expandida
    echo $string;  
?>

```
> Olá, `$name`!

- **Aspas duplas**: Ao usar aspas duplas para delimitar uma string, o PHP expandirá as variáveis e interpretará sequências de escape dentro do texto.

Exemplo:

```php
<?php
    $name = 'Edson Lopes';
    $string = "Olá, $name!"; // A variável $name será expandida
    echo $string;
?>
```
> Olá, Edson Lopes!

- **Concatenação de strings**: Para unir várias strings, você pode usar o operador de concatenação (`.`) ou o operador de atribuição e concatenação (`.=`) para adicionar um trecho de texto ao final de uma string existente.

Exemplo com operador de concatenação (`.`):

```php
<?php 
    $greeting = 'Olá, ';
    $name = 'João';
    $string = $greeting . $name . '!'; // Concatenação das variáveis
    echo $string;
?>
```
> Olá, João!

Exemplo com operador de atribuição e concatenação (`.=`):

```php
<?php 
    $greeting = 'Olá, ';
    $name = 'João';
    $greeting .= $name; // Adiciona o valor da variável $name ao final da string $greeting
    $greeting .= '!'; // Adiciona o ponto de exclamação
    echo $greeting;
?>
```
### Escopo de Variável

O escopo de uma variável em PHP determina onde a variável pode ser acessada e usada dentro do código. Existem três tipos principais de escopo de variáveis em PHP: escopo global, escopo de função e escopo local.

- **Escopo Global**: Variáveis declaradas fora de qualquer função têm escopo global, o que significa que podem ser acessadas em qualquer lugar do código, incluindo dentro de funções.
Exemplo:

```php
<?php
    $globalVariable = 10; // Variável global

    function myFunction() {
        global $globalVariable;
        echo $globalVariable; // Acesso à variável global dentro da função
    }
    
    myFunction(); // Saída: 10
?>
```

- **Escopo de Função**: Variáveis declaradas dentro de uma função têm escopo de função, o que significa que elas só podem ser acessadas dentro da função em que foram declaradas.
Exemplo:

```php
<?php
    function myFunction() {
        $functionVariable = 20; // Variável de função
    
        echo $functionVariable; // Acesso à variável de função dentro da função
    }
    
    myFunction(); // Saída: 20
    
    echo $functionVariable; // Erro! A variável de função não pode ser acessada fora da função
?>
```

## Constantes 

As constantes em PHP são valores que não pode ser alterados durante a execução do script. Para definir uma constante em PHP, você pode usar a função `define()` ou a palavra-chave `const`. A diferença entre as duas é que `define()` pode ser usada em qualquer lugar do código, enquanto `const` só pode ser usada dentro de uma classes ou namespaces.

Aqui está um exemplo de como definir uma constante usando` define()`:

```php
<?php
define("NOME_CONSTANTE", "Valor da constante");

echo NOME_CONSTANTE;
?>
```
Aqui está um exemplo de como definir uma constante usando a palavra-chave `const`:

```php
<?php
const NOME_CONSTANTE = "Valor da constante";

echo NOME_CONSTANTE;
?>
```

Importante observar que, ao contrário das variáveis, as constantes não têm um símbolo de cifrão (`$`).