## Arrays

Os arrays em PHP permitem armazenar múltiplos valuees em uma única variável.

### Criando Array

Para criar um array em PHP, você pode usar a função `array()` ou a sintaxe de colchetes `[]` para inicializá-lo com valuees. Aqui está o exemplo:

- Exemplo 1:
```php
<?php
    $cars = array("Onix", "Sandero", "HB20");
    print_r($cars);
?>
```

- Exemplo 2:
```php
<?php
    $cars = ["Onix", "Sandero", "HB20"];
    print_r($cars);
?>
```

> Array ( [0] => Onix [1] => Sandero [2] => HB20 )

### Adicionando um Novo value ao Array
Você pode adicionar um novo value ao array usando a sintaxe `$array[] = value`. O novo value será adicionado automaticamente à próxima posição disponível do array.

```php
<?php 
    $cars = ["Onix", "Sandero", "HB20"];
    $cars[] = "Gol";
    print_r($cars); 
?>
```
> Array ( [0] => Onix [1] => Sandero [2] => HB20 **[3] => Gol** )

### Definindo as Posições do Array

Você também pode especificar as posições do `array` associando valuees a keys numéricas. 

```php
<?php 
    $motos = array(1=> "Yamaha", 2=>"Honda");
    print_r($motos)
?>
```

> Array ( **[1]** => Yamaha **[2]** => Honda )

Além de adicionar valuees individualmente, você também pode adicionar um novo array especificando uma key específica.
```php
<?php 
    $motos = array(1=> "Yamaha", 2=>"Honda");
    $motos[10] = "Suzuki";
    print_r($motos);
?>
```

>  Array ( [1] => Yamaha [2] => Honda **[10] => Suzuki** )

### Foreach

é um estrutura de controle que percorre por todos os elementos de um array de forma simples.

```php
<?php
    $cars = array("Onix", "Sandero", "HB20");
    foreach($cars as $car) {
        echo $car.'<br />';
    }
    
    $totalCars = count($Cars);
    echo "<br />Quantidade de veículos: $totalCars ";
?>
```

> Onix
> Sandero
> HB20
>
> Quantidade de veículos: 3

- Você também pode acessar a key e o valor de cada elemento usando a sintaxe foreach `($array as $key => $value)`:

```php
<?php
    $cars = array("Onix", "Sandero", "HB20");
    foreach ($cars as $key => $car) {
        echo "[$key]: $car<br />";
    }
    
    $totalCars = count($cars);
    echo "<br />Quantidade de veículos: $totalCars ";
?>
```
> [0]: Onix
> [1]: Sandero
> [2]: HB20
> 
> Quantidade de veículos: 3

### Arrays associativos

São arrays em que as chaves são definidas pelo usuário em vez de serem indices numéricos. Todo elemento associativo consiste em um par chave-valor, onde a chave é do tipo string.

```php
<?php
    $person = array(
        "nome"=> "Edson Lopes JR", 
        "idade"=>23, 
        "altura"=> "1.78"
    );

    $person["cidade"] = "Jaboatão do Guararapes";
    
    foreach($person as $index => $value) {
        echo "$index: $value <br />";
    }
?>
```
> nome: Edson Lopes JR
> idade: 23
> altura: 1.78
> cidade: Jaboatão do Guararapes

### Arrays Multidimensional 

São arrays que contêm outros arrays como elementos. Eles é usados para armazenar dados em varias dimensões(matriz).
```php
<?php
    $cars = array(
        array("Marca" => "Ford", "Modelo" => "Fiesta", "Ano" => 2020),
        array("Marca" => "Chevrolet", "Modelo" => "Onix", "Ano" => 2021),
        array("Marca" => "Volkswagen", "Modelo" => "Gol", "Ano" => 2019)
    );

    foreach($cars as $car) {
        foreach($car as $index => $value) {
            echo "$index: $value <br />";
        };
        echo "<br />";
    };
?>
```
> Marca: Ford
> Modelo: Fiesta
> Ano: 2020
> 
> Marca: Chevrolet
> Modelo: Onix
> Ano: 2021
> 
> Marca: Volkswagen
> Modelo: Gol
> Ano: 2019