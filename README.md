# CPF/CNPJ at same laravel nova field

Mask and validation in a single field for both CPF and CNPJ
The code will understand which of the two options is being inserted.

### Install

Run this command into your nova project:

`composer require stonkeep/cpf-cnpj`

### Add it to your Nova Resource:

```php
use Stonkeep\CpfCpnj\CpfCpnj;
CpfCnpj::make('cpf');
```
# cpf-cnpj
