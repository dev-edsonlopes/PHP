## Arrays

Os arrays em PHP permitem armazenar múltiplos valores em uma única variável.

### Criando Array

Para criar um array em PHP, você pode usar a função `array()` ou a sintaxe de colchetes `[]` para inicializá-lo com valores. Aqui está o exemplo:

- Exemplo 1:
```php
<?php
    $carros = array("Onix", "Sandero", "HB20");
    print_r($carros);
?>
```

- Exemplo 2:
```php
<?php
    $carros = ["Onix", "Sandero", "HB20"];
    print_r($carros);
?>
```

> Array ( [0] => Onix [1] => Sandero [2] => HB20 )

### Adicionando um Novo Valor ao Array
Você pode adicionar um novo valor ao array usando a sintaxe `$array[] = valor`. O novo valor será adicionado automaticamente à próxima posição disponível do array.

```php
<?php 
    $carros = ["Onix", "Sandero", "HB20"];
    $carros[] = "Gol";
    print_r($carros); 
?>
```
> Array ( [0] => Onix [1] => Sandero [2] => HB20 **[3] => Gol** )

### Definindo as Posições do Array

Você também pode especificar as posições do `array` associando valores a chaves numéricas. 

```php
<?php 
    $motos = array(1=> "Yamaha", 2=>"Honda");
    print_r($motos)
?>
```

> Array ( **[1]** => Yamaha **[2]** => Honda )

Além de adicionar valores individualmente, você também pode adicionar um novo array especificando uma chave específica.
```php
<?php 
    $motos = array(1=> "Yamaha", 2=>"Honda");
    $motos[10] = "Suzuki";
    print_r($motos);
?>
```

>  Array ( [1] => Yamaha [2] => Honda **[10] => Suzuki** )
