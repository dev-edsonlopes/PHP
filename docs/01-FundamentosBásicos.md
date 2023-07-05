# Fundamentos Básicos


### PHP usando a tag `<?php>`

Para executar um comando em PHP, você precisa envolvê-lo dentro da tag `<?php>`

Aqui está um exemplo de como você pode executar um comando básico de "Hello World" em PHP:

```php
<?php
    echo "Hello World <br />";
    print "My name is Edson";
?>
```
> `echo` e `print` é dois comandos de saída em `php`

### Comentários em PHP

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

### Variáveis

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