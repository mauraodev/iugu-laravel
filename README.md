# Iugu Laravel

Um *wrapper* simples em cima do [iugu-php](https://github.com/iugu/iugu-php).


## Instalação

Para instalar o Octopus Laravel Wrapper, você precisa do seguinte:
 - Laravel 5.5 ou superior
 - PHP 7.0.31 ou superior
 - Composer

A instalação é feita via Composer:
```
composer require unaspbr/iugu-laravel
```

## Configuração

Após a instalação, você deverá adicionar o ServiceProvider do Octopus à `array` **providers**, no arquivo `config/app.php` do Laravel, desta forma:

```php
unaspbr\IuguServiceProvider::class,
```

Por fim, para publicar o arquivo de configuração do Octopus, execute o comando:

 ```php 
 php artisan vendor:publish
 ```

No arquivo `config/iugu_laravel.php` gerado, mude o campo `IUGU_API_KEY` da `array` para a API Key que você usará como autenticação da API. Esta chave pode ser obtida no painel do Iugu.


## Usando o Wrapper

O *wrapper* funciona como o [iugu-php](https://github.com/iugu/iugu-php), mas em vez de chamar `Iugu_{Recurso}`, deverá ser chamado `Iugu::r('{recurso}')`. Além disso, a chave será injetada pelo service provider, então não será necessário chamar explicitamente o método `Iugu::setApiKey`.

### Exemplo
```php
<?php

use unaspbr\Iugu;

Iugu::r('customer')::create([
	'nome' => 'Foo',
	'email' => 'foo@bar.com',
]);
```

## Licença

[GNU GENERAL PUBLIC LICENSE v3](https://www.gnu.org/licenses/gpl-3.0.pt-br.html)
