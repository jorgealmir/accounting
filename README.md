# Accounting

API Accounting

### Dependencies
* PHP >= 7.2

### Installation:

If you already have a composer.json file, just add the following dependency to your project:

```json
"require": {
    "ja-martins/accounting": "^1.0"
}
```

### To use the library:
```php
<? php

require __DIR__ . '/vendor/autoload.php';

use Jamartins\Accounting\Account;

$account = new Account();

var_dump($account->getAccount(4));
```

### Developer
* [Jorge Almir Martins] - Desenvolvedor da bíblioteca

License
----

MIT
