# Condicionais 

As estruturas condicionais permitem que você tome decisões em seu código com base em determinadas condições. IF / ELSE / ELSEIF e SWITCH / CASE.

## IF / ELSE / ELSEIF 

A estrutura IF / ELSE / ELSEIF permite testar condições e executar diferentes trechos de código dependendo se a condição é verdadeira ou falsa.

### IF 

A estrutura IF verifica uma condição e executa um bloco de código se a condição for verdadeira.

```php
if($condição):
    //Linhas de codigo  
endif;
```

Exemplo:
```php
<?php 
    $numero = 10;
    if($numero == 10):
        echo "o valor é igual á 10";
    endif;
?>
```
> o valor é igual á 10

### ELSE

A estrutura ELSE é usada em conjunto com o IF e especifica um bloco de código a ser executado quando a condição do IF for falsa.

Exemplo:
```php
<?php
    $numero = 15;
    if($numero == 10):
        echo "o valor é igual á 10";
    else:
        echo "O valor é diferente de 10";
    endif;
?>
```

> O valor é diferente de 10

### ELSE IF

A estrutura ELSEIF é usada para verificar uma condição adicional caso a condição do IF seja falsa.

exemplo:
```php
<?php
    $numero = 9;
    if($numero == 10):
        echo "o valor é igual á 10";
    elseif($numero <= 10):
        echo "O valor é menor que 10";
    else:
        echo "O valor é diferente de 10";
    endif;
?>
```

> O valor é menor que 10

**OBS**: assim que uma condição verdadeira é encontrada, o bloco de código correspondente é executado e o programa sai da estrutura condicional.

### Operação Ternário

O operador ternário (`? :`) é uma forma simplificada de escrever uma estrutura IF / ELSE em uma única linha.

```php
<?php
    $media = 7;
    echo ($media >= 7) ? "Aprovado!" : "Reprovado!";
?>
```
> Aprovado!

## SWITCH / CASE 

A estrutura SWITCH / CASE é usada quando você tem uma expressão a ser comparada com diferentes valores possíveis. Ela permite executar diferentes blocos de código com base no valor da expressão.

```php
<?php
    $cor = "vermelho";
    switch($cor):
        case "vermelho":
            echo "Sua cor prefirida é o Vermelho";  
            break; // Break é usado pra sair da estrutura
        case "verde":
            echo "Sua cor prefirida é o Verde";
            break;
        case "azul":
            echo "Sua cor prefirida é o Azul";
            break;
        default:
            echo "Sua cor prefirida não é Azul, Vermelho e nem Verde"
        
    endswitch;
?>
```

> Sua cor prefirida é o Vermelho

