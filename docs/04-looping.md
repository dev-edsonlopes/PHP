# Estrutura do repetição

As estruturas de repetição permitem que você execute um bloco de código várias vezes até que uma condição seja atendida. WHILE, DO WHILE, FOR e FOREACH.

## WHILE / DO WHILE


### WHILE

A estrutura WHILE executa um bloco de código enquanto uma condição for verdadeira.

```php
<?php
    $contador = 1;

    while($contador <= 10):
        echo "$contador ";
        $contador++;
    endwhile;
?>
```
> 1 2 3 4 5 6 7 8 9 10


### DO WHILE

A estrutura DO WHILE é semelhante à estrutura WHILE, mas a condição é verificada após a execução do bloco de código. Isso garante que o bloco seja executado pelo menos uma vez.

```php
<?php
    $contador = 1;

    do {
        echo "$contador ";
        $contador++;
    } while($contador <= 10);
?>
```
> 1 2 3 4 5 6 7 8 9 10
## FOR / FOREACH

### FOR

A estrutura FOR é usada quando você sabe exatamente quantas vezes deseja executar um bloco de código.

```php
<?php
    for($contador = 0; $contador <= 10; $contador++):
        echo "$contador ";
    endfor;
?>
```

> 0 1 2 3 4 5 6 7 8 9 10

### FOREACH

A estrutura FOREACH é usada para percorrer elementos de um array ou objeto.

```php
<?php
    $cores = array("Verde", "Vermelho", "Azul", "Preto");
    foreach($cores as $valor):
        echo "$valor <br />";
    endforeach;
?>
```
> Verde
> Vermelho
> Azul
> Preto

- Para exibir o índice do elemento, você pode usar a sintaxe foreach (`$array as $indice => $valor`).

```php
<?php
    $cores = array("Verde", "Vermelho", "Azul", "Preto");
    foreach($cores as $indice => $valor):
        echo "[$indice] $valor <br />";
    endforeach;
?>
```
> [0] Verde
> [1] Vermelho
> [2] Azul
> [3] Preto