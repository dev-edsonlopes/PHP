# Upload de Arquivos

O upload de arquivos é uma funcionalidade comum em aplicações web que permite que os usuários enviem arquivos para o servidor. Em `PHP`, você pode realizar o upload de arquivos usando a superglobal `$_FILES` e algumas funções específicas.

### Configuração do formulário HTML

Primeiro, você precisa configurar o formulário HTML para permitir o upload de arquivos. Certifique-se de definir o atributo `enctype` como `"multipart/form-data"`, que é necessário para o envio de arquivos.


```html
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <input type="submit" name="enviar-formulário">
</form>
```


```php
<?php 
    if(isset($_POST['enviar-formulário'])):
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        
        if(in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivo/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid().".$extensao";
                
            if(move_uploaded_file($temporario, $pasta.$novoNome)):
                $messagem[] = "Upload feito com sucesso!";
            else:
                $messagem[] = "Erro, não foi possivel fazer o upload";
            endif;
        else:
            $mensagem[] = "Formato Inválido";
        endif;
        echo $messagem;
    endif;
?>
```

### Passo 2: Processamento do arquivo de upload

Após o envio do formulário, você precisa processar o arquivo de upload em PHP. Você pode fazer isso usando a superglobal $_FILES e as funções relacionadas. Aqui está um exemplo de código PHP para processar o upload de arquivos:

```php
<?php
if (isset($_POST['enviar-formulario'])) {
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if (in_array($extensao, $formatosPermitidos)) {
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid() . ".$extensao";

        if (move_uploaded_file($temporario, $pasta . $novoNome)) {
            $mensagem = "Upload feito com sucesso!";
        } else {
            $mensagem = "Erro, não foi possível fazer o upload";
        }
    } else {
        $mensagem = "Formato inválido";
    }

    echo $mensagem;
}
?>
```

### Upload com varios arquivos

